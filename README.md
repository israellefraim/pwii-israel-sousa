<picture>
  <img alt="Tela com códigos" src="https://images.prismic.io/vaultinum/0458a9f1-e149-4037-b9aa-aa4b4fb53c25_propriete-intellectuelle-code-source-protection-compressed.jpg?auto=compress,format&rect=0,0,2400,981&w=2400&h=981" width="800">
</picture>

# PWII - PROGRAMAÇÃO WEB II
Aulas de Programação Web II com os Professores João Siles e Ricardo Palhares. Tecnologias usadas envolvem PHP, HTML, CSS, JS, etc.

## 📚 Documentação
<details>
<summary>
<strong>✔️ PASSO A PASSO PARA CRIAÇÃO DE UM PROJETO LARAVEL</strong>
</summary>
  
### <strong>1º Passo:</strong>

Execute um dos comandos abaixo que seja de acordo com o seu Sistema operacional, para instalar o PHP, Composer e o instalador do Laravel.

macOs:
```bash
/bin/bash -c "$(curl -fsSL https://php.new/install/mac/8.4)"
```

Windows PowerShell:
```powershell
Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.4'))
```

Linux:
```bash
/bin/bash -c "$(curl -fsSL https://php.new/install/linux/8.4)"
```

<br>

### <strong>2º Passo:</strong>

Abra o `cmd` e acesse o caminho que está o repositório em que será criado o projeto Laravel.

Ex.:
```cmd
cd C:\xampp\htdocs\pwii-israel-sousa
```

Após isso, crie o novo projeto com um nome:

```cmd
laravel new nome-do-projeto
```
<br>

### <strong>3º Passo:</strong>

- Para a 1ª pergunta quanto a instalação do kit, responda `none`.
- Para a 2º pergunta quanto a qual será o banco de dados usado, responda `sqlite`.
- Ao ser perguntado se deseja executar o `npm install` e o `npm run build`, responda `yes`.

<br>

### <strong>4º Passo:</strong>

Com o projeto criado, digite os comandos abaixo:

Comando 1:
```cmd
cd teste
```

Comando 2:
```cmd
composer run dev
```

<br>

### <strong>5º Passo:</strong>

Em seguida, só segurar `Ctrl` e clicar no link ao lado da frase "INFO  Server running on..."
</details>

<br>

<details>
<summary>
<strong>✔️ PASSO A PASSO PARA CONFIGURAÇÃO DE UM PROJETO LARAVEL</strong>
</summary>
<br>

### <strong>1º Passo:</strong>

- Primeiramente abra o Windows PowerShell como Administrador.
- Após isso, insira o comando:
```powershell
Set-ExecutionPolicy RemoteSigned
```

- Depois responda com `S` e feche o Windows PowerShell.

<br>

### <strong>2º Passo:</strong>

- Com o Explorador de Arquivos aberto, abra a pasta em que está localizado seu projeto Laravel.
- Com o botão direito clique em "Abrir no Terminal"

<br>

### <strong>3º Passo:</strong>

- Primeiro digite o comando:
```powershell
code .
```

- Uma vez com o projeto aberto no VsCode, procure pelo arquivo `.env.exemple`.
- Copie o arquivo na mesma pasta e altere o nome dele para `.env`.

<br>

### <strong>4º Passo:</strong>

De volta ao PowerShell, digite:
```powershell
composer install
```

<br>

### <strong>5º Passo:</strong>

Com o Composer instalado, execute os comandos abaixo:

Comando 1:
```powershell
npm install
```

Comando 2:
```powershell
npm run build
```

<br>

### <strong>6º Passo:</strong>

- Em seguida gere uma chave inserindo o comando abaixo:
```powershell
php artisan key:generate
```

- Após a execução do comando anterior, insira o comando e baixo e logo depois responda com `yes`:
```powershell
php artisan migrate
```

<br>

### <strong>7º Passo:</strong>

Em seguida, só segurar `Ctrl` e clicar no link ao lado da frase "INFO  Server running on..."

</details>
