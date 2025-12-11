import asyncio
import websockets
import json
import vgamepad as vg

# Inicializa o controle virtual de Xbox 360
gamepad = vg.VX360Gamepad()
print("Controle Virtual Inicializado! (Verifique no 'Joy.cpl' do Windows)")

async def handler(websocket):
    print("Celular conectado!")
    try:
        async for message in websocket:
            dados = json.loads(message)
            
            # 1. PROCESSAR VOLANTE (Eixo X Esquerdo)
            # O HTML envia angulo entre -90 (esq) e 90 (dir).
            # O Joystick aceita entre -32768 e 32767.
            angulo = dados.get('angulo', 0)
            # Regra de 3 para converter o angulo em valor de joystick
            valor_joy_x = int((angulo / 90) * 32767)
            
            # 2. PROCESSAR PEDAIS (Gatilhos / Triggers)
            # Gatilhos vão de 0 a 255
            acelerador = 255 if dados.get('acelerador', False) else 0
            freio = 255 if dados.get('freio', False) else 0

            # 3. ENVIAR PARA O WINDOWS
            # left_joystick_float(x_value_float, y_value_float)
            gamepad.left_joystick(valor_joy_x, 0) 
            gamepad.left_trigger(freio)
            gamepad.right_trigger(acelerador)
            
            # Atualiza o estado do controle
            gamepad.update()

    except websockets.exceptions.ConnectionClosed:
        print("Celular desconectado.")

async def main():
    # Pega o IP local automaticamente ou define manual, ex: "192.168.1.XX"
    # Rodando na porta 8765
    async with websockets.serve(handler, "0.0.0.0", 8765):
        print("Servidor rodando... Aguardando conexão do celular.")
        await asyncio.Future()  # roda para sempre

if __name__ == "__main__":
    asyncio.run(main())