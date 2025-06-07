
# 🍽️ Bistrô Delícia — Projeto de Mineração de Dados

Este projeto foi desenvolvido como parte da disciplina de **Mineração de Dados**, com o objetivo de aplicar técnicas de extração e análise de informações a partir de arquivos de dados reais, utilizando ferramentas e linguagens voltadas ao ambiente Linux e Web.

---

## 🎯 Objetivo

Extrair, manipular e apresentar dados relacionados a gorjetas de clientes, utilizando filtros por gênero, cálculos estatísticos (média, desvio padrão), e visualizações gráficas, explorando tanto o terminal Linux quanto tecnologias Web.

---

## 🛠️ Tecnologias Utilizadas

### 🔧 Backend e Análise de Dados:
- **Linux Shell Scripts** (`.sh`)  
  - Processamento de arquivos `.csv`
  - Cálculo de média e desvio padrão com `bc`
  - Filtros com `awk`
- **Ferramentas Linux**:
  - `awk`, `bc`, `cut`, `sort`, `uniq`, `grep`
- **Servidor Web**:
  - **Apache2**
- **Compartilhamento de arquivos**:
  - **Samba** para acesso via rede

### 🌐 Frontend:
- **HTML5**
- **CSS3** com gradientes e estilização responsiva
- **JavaScript**:
  - Consumo de API local
  - Geração de gráficos com [Chart.js](https://www.chartjs.org/)

### 💻 Lógica Servidor:
- **PHP**:
  - Sessões (`session_start`)
  - Controle de autenticação
  - Execução de Shell Scripts no backend

---

## 📊 Funcionalidades

- 📤 Upload de arquivos CSV com dados de gorjetas
- 🔎 Filtros por gênero com `awk`
- 🧮 Cálculo de:
  - Total de gorjetas
  - Média
  - Desvio padrão
- 📈 Visualização gráfica com Chart.js
- 👤 Controle de login e sessão
- 🔄 Integração entre **Shell + PHP + JS**

---

## 📁 Estrutura do Projeto

```
├── consulta.php              # Consulta geral com dados e estatísticas
├── enviar.php               # Tela de envio de arquivos
├── graf.html                # Página com gráfico de gorjetas
├── graf.php                 # API em PHP que retorna os dados em JSON
├── filtroGM.sh              # Filtra gorjetas para gênero feminino
├── filtroGH.sh              # Filtra gorjetas para gênero masculino
├── calculaNovo.sh           # Calcula média, total e desvio padrão
├── go.csv                   # Arquivo CSV com os dados
├── menu.php                 # Menu principal do sistema
└── sair.php                 # Encerramento de sessão
```

---

## 🧠 Conhecimentos Trabalhados

- Mineração e tratamento de dados com `awk`, `grep`, `cut`
- Estatística básica (média, desvio padrão)
- Programação Web (HTML/CSS/JS/PHP)
- Execução segura de scripts shell pelo PHP
- Integração de tecnologias para criação de dashboards interativos

---

## 📦 Como Executar

1. Inicie o Apache e certifique-se que os arquivos estão em `/var/www/html/`
2. Acesse via navegador:  
   `http://localhost/menu.php`
3. Faça login e use as funcionalidades:
   - Enviar arquivo `.csv`
   - Consultar por gênero
   - Ver gráfico

---

## 👨‍🏫 Disciplina

**Mineração de Dados**  
Curso de Desenvolvimento de Software  
Projeto realizado em ambiente **Linux Virtualizado**, com apoio de **Dropbox/Samba** para integração entre os sistemas.

---

## 📅 Créditos

Desenvolvido por Vagner Junior Ventura — 2025  
Projeto acadêmico, todos os direitos reservados aos autores e professores envolvidos.
