# 🔮 Zodiac Calculator – Projeto Acadêmico com PHP e XML

Aplicação web desenvolvida com foco educacional para calcular o **signo zodiacal do usuário** com base na data de nascimento. O projeto visa aplicar conceitos fundamentais de desenvolvimento web, integração entre linguagens (PHP, HTML, XML), estilização com **Bootstrap** e uso de ambiente local com **XAMPP** para testes em PHP.

<div align="center">
  <img src="/assets/screenshot-home.png" alt="Tela inicial da calculadora de signo." width="100%"/>
  <img src="/assets/screenshot-aquarius.png" alt="Tela mostrando o resultado de signo aquário." width="100%"/>
  <img src="/assets/screenshot-scorpio.png" alt="Tela mostrando o resultado do signo escorpião." width="100%"/>
</div>

---

## 🚀 Tecnologias Utilizadas

- **PHP** – Processamento da lógica de verificação do signo com base na data.
- **HTML5** e **CSS3** – Estrutura e estilização personalizada do layout.
- **Bootstrap** – Framework CSS para responsividade e design moderno.
- **XML** – Armazenamento dos dados estruturados de cada signo.
- **XAMPP** – Ambiente local para desenvolvimento e execução do código PHP.

---

## 📦 Instalação e Execução

Siga os passos abaixo para executar o projeto localmente com o XAMPP:

```bash
# 1. Clone o repositório para sua máquina
git clone https://github.com/islaianeribeiro/zodiac-calculator.git

# 2. Acesse a pasta do projeto clonado
cd zodiac-calculator

# 3. Copie ou mova os arquivos do projeto para a pasta 'htdocs' do XAMPP
# (Exemplo de caminho no Windows)
C:/xampp/htdocs/zodiac-calculator

# 4. Abra o XAMPP Control Panel e inicie o servidor Apache

# 5. No navegador, acesse o projeto digitando:
http://localhost/zodiac-calculator
```

💡 **Importante:**

- Certifique-se de que o Apache está ativo no XAMPP.
- O nome da pasta dentro de `htdocs` deve ser `zodiac-calculator` (ou correspondente ao caminho que você usar na URL).

---

## 🌟 Funcionalidades

- Formulário para o usuário inserir sua data de nascimento;
- Lógica PHP que identifica o signo com base na data;
- Leitura do arquivo XML contendo os dados dos signos (nome, data de início e fim);
- Layout adaptável a diferentes dispositivos com uso de Bootstrap;
- Estilização refinada com CSS adicional;
- Rodando 100% localmente com XAMPP.

---

## 🧠 Organização do Código

Estrutura das pastas e arquivos do projeto:

```
📁 assets
├─ 📁 css                       # Arquivos de estilo CSS
├─ 📁 img                       # Imagens usadas na aplicação
📁 layouts                      # Páginas e componentes PHP
├─ 📄 footer.php                # Rodapé da página
├─ 📄 header.php                # Cabeçalho da página
📄 index.php                    # Página principal com o formulário
📄 show_zodiac_sign.php         # Script para processar a data e exibir o signo
📄 signos.xml                   # Arquivo com os dados dos signos em XML
```

---

## 📚 Conclusão

Este projeto acadêmico foi uma excelente oportunidade para colocar em prática os conhecimentos em **desenvolvimento web full stack básico**, especialmente na integração entre **PHP e XML**, além de aprimorar a habilidade de configurar ambientes locais com XAMPP. A combinação de back-end leve com uma interface responsiva trouxe mais entendimento sobre a estruturação de projetos reais.

---

## 👩‍💻 Desenvolvido por

**Islaiane Ribeiro**
Desenvolvedora Front-End

🔗 [https://www.linkedin.com/in/islaianeribeiro](https://www.linkedin.com/in/islaianeribeiro)

---

## 📝 Licença

MIT © 2024 — Este projeto é de livre utilização para fins educacionais e pessoais.
