# FoxFood

**FoxFood** is a web application for discovering and ordering food in your area. It allows users to explore categories such as coffee, snacks, meals, savory items, and dinners, as well as search for items, and view the cart total and available balance.

---

## Table of Contents

- [About](#about)
- [Features](#features)
- [Demo](#demo)
- [Installation](#installation)
- [Usage](#usage)
- [Project Structure](#project-structure)
- [Technologies](#technologies)
- [Authors](#authors)
- [License](#license)
- [Contact](#contact)

---

## About

FoxFood is a front-end prototype of a food ordering system. The responsive interface demonstrates how users can:

- Search for items by keyword.
- View categories (coffee, snacks, meals, savory items, dinners).
- Track the cart total and available balance (demo only).

> **Note:** This project includes only the visual part. Back-end and database functionalities will be implemented in future versions.

---

## Features

- **Search bar**: styled input with placeholder `Search`.
- **Category cards**: Bootstrap cards with image and description for each food type.
- **Value indicators**: placeholders `!cart_value` and `!available_balance` for dynamic values.
- **Responsive layout**: uses Bootstrap 5 for optimal experience on mobile and desktop.

---

## Demo

![FoxFood main screen](Imgs/frase.png)

---

## Installation

1. **Clone the repository**  
   ```bash
   git clone https://github.com/Capyvara13/FoxFood.git
   cd FoxFood
   ```
2. **Open the project**  
   Open in a code editor (recommended: Visual Studio Code).  
3. **Local preview**  
   Open `Home.html` in your browser.  

---

## Usage

- Search for an item using the search bar in the header.  
- Click on a category to view details (internal pages not linked yet).  
- Observe the cart value and balance at the top right (no back-end logic yet).

---

## Project Structure

```bash
FoxFood/
├── Imgs/                   # icons and images used in cards and logo
│   ├── icon.png
│   ├── logo-removebg-preview.png
│   ├── Cafe.png
│   ├── lanches.png
│   ├── Comida.png
│   ├── Salgados.png
│   └── Jantar.png
├── Home.html               # main page
├── Home.css                # custom styles
├── script.js               # JavaScript scripts (currently empty)
└── README.md               # this file
```

---

## Technologies

- **Front-end:** HTML5, CSS3, JavaScript (ES6)  
- **Frameworks & Libraries:** Bootstrap 5, Popper.js  
- **Development Environment:** Visual Studio Code  
- **Database (future):** MySQL / PHP

---

## Authors

- Enzo Canale Guerato (EnzoGuerato) — guerato.enzo@gmail.com  
- Matheus Eduardo Prestes — matheuseprestes@gmail.com  
- Lucas Henrique Romero Rodrigues (PingulinMaster) — mortalninjaih98@gmail.com  
- Rafael Pavanello Diniz — rafaelpdiniz8@gmail.com  
- Tiago Rafael Fernandes Leite (Capyvara13) — tiagorafleite@gmail.com

---

## License

This project is licensed under the [MIT License](LICENSE.md).

---

## Contact

For questions, suggestions, or contributions, contact the authors via email or open an issue in this repository.
