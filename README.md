# Rightcore


![Version](https://img.shields.io/badge/version-v1.0.0-blue.svg) [![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](#) ![Maintainer](https://img.shields.io/badge/Maintainer-Jeremy%20James%20Sangutan-green.svg)

This is a template for rightcore project. Clone `master` and create your own branch before starting.

##### Table of Contents

- [:pushpin: Prerequisites](#Prerequisites)
- [:rocket: Installing Nanashoku](#Installing)
- [:computer: Usage of Nanashoku](#Usage)
- [:memo: Contributing to Nanashoku](#Contributing)
- [:paperclip: Additional Info](#Additional)

  - [Breakpoints](#Breakpoints)
  - [Maxwidth](#Maxwidth)
  - [Summary for FLOCSS](#FLOCSS)
  - [BEM brief explanation in SCSS](#BEM)

- [:mailbox: Credits](#Credits)
  - [Division of Task](#Division)
- [:two_hearts: Acknowledgements and References](#Acknowledgements)
- [:handshake: Contribute](#Contribute)

## <a name='Prerequisites'></a> :pushpin: Prerequisites

Before you begin, ensure you have met the following requirements:

- You have a `Windows 10` machine.
- Server `xampp` or `laragon`
  > Preferably [**Laragon**](https://laragon.org/download)

| Tool | Version | Description                                                                           |
| ---- | ------- | ------------------------------------------------------------------------------------- |
| NVM  | > 1.1   | Node version manager for fast switching node version                                  |
| Node | >= 8.15 | Install Node via [NVM](https://github.com/coreybutler/nvm-windows/releases/tag/1.1.7) |

## <a name='Installing'></a> :rocket: Installing Rightcore

To install Rightcore in your local machine, run this following script in your terminal:

**Windows**:

```sh
git clone -b <your_branch> https://github.com/Dybreak0/Rightcore
```

## <a name='Usage'></a>:computer: Usage of Rightcore

You can start away the development.
**No data for this**

## <a name='Contributing'></a> :memo: Contributing to RightCore

Before cloning, create a [new branch](https://github.com/HiPE-Inc-ltd/jeen_gross) for your local development.

To contribute to RightCore, follow these steps:

1. Fork this repository.
2. Create a branch: `git checkout -b <branch_name>`.
3. Make your changes and commit them: `git commit -m '<commit_message>'`
4. Push to the original branch: `git push origin <project_name>/<location>`
5. Create the pull request.

Alternatively see the GitHub documentation on [creating a pull request](https://help.github.com/en/github/collaborating-with-issues-and-pull-requests/creating-a-pull-request).

## <a name='Additional'></a> :paperclip: Additional Info

Additional information about Rightcore.

- There is no Tablet version, so we are the one responsible for the tablet design.
- We follow the practices of FLOCSS architecture for uniformity. Reference for [FLOCSS](https://github.com/hiloki/flocss/blob/master/README_eng.md) and [BEM CSS](https://css-tricks.com/bem-101/)
- All resources about the project can be found in this link [57 タイヤワークス Resources](https://docs.google.com/spreadsheets/d/1LAiRV2n-3A-NIOORnLkw_B0PFHWeqXLgSeQp3prdg6g/edit#gid=1256589856)
- There is **no coding rule**, client says FLOCSS is okay.

- ### <a name='Breakpoints'></a> Breakpoints
  | Platform | Breakpoint(s)      |
  | -------- | ------------------ |
  | PC       | 1025px (1025px up) |
  | Tablet   | 751px to 1024px    |
  | Mobile   | 750px (750px down) |
- ### <a name='Maxwidth'></a> Max-width
  | Platform | max-width |
  | -------- | --------- |
  | Tablet   | 1024px    |
  | Mobile   | 750px     |
- ### <a name='FLOCSS'></a> Summary for FLOCSS

  Link for [FLOCSS Summarry](https://titanwolf.org/Network/Articles/Article?AID=8651e5ed-bb84-446d-82a9-3d811109c133#gsc.tab=0)

  - **l-** as prefix of layout
  - **c-** as prefix of component
  - **p-** as prefix of project
  - **u-** as prefix of Utility

    - #### FLOCSS ARCHITECTURE:

    ```
    - css/
    - foundation
    - layout
    - object
        - component
        - project
        - Utility
    ```

- ### <a name='BEM'></a> BEM brief explanation in SCSS

  ##### HTML :

  ```HTML
  //HTML Implementation


  <div class="card">
      <h1 class="card__title">
          Some Title
      </h1>
      <p class="card__text">
          Text with variation/modifiers
      </p>
      <p class="card__text--primary">
          Text with primary color or something.
      </p>
      <p class="card__text--secondary">
          Text with secondary color or something.
      </p>
      <a href="#" class="card__button">
          Click Here
      </a>
  </div>

  ```

  ##### SCSS:

  ```scss
  //SASS Implementation
  .card {
    //<---------------BLOCK
    &__title {
      //<---------------ELEMENT
    }
    &__text {
      //<---------------ELEMENT
      &--primary {
        //<---------------MODIFIERS
      }
      &--secondary {
        //<---------------MODIFIERS
      }
    }
    &__button {
      //<---------------ELEMENT
    }
  }
  ```

## <a name='Credits'></a> :mailbox: Credits

### <a name='Division'></a> Division of task

| Team Members | Task                                                                                                            |
| ------------ | --------------------------------------------------------------------------------------------------------------- |
| Jeremy👨‍💻📖   | <ul><li>Top page</li><li>About page</li></ul>                                                                   |
| Edwin 👨‍💻     | <ul><li>News page</li><li>News Details page</li></ul>                                                           |
| Mark Ivan 👨‍💻 | <ul><li>Storage page</li></ul>                                                                                  |
| Bruce 👨‍💻     | <ul><li>Company Page (After completing, assist Mark Ivan on contact page)</li><li>Privacy Policy Page</li></ul> |
| Dave 👨‍💻      | <ul><li>Service (After completing, assist Edwin page)</li></ul>                                                 |
| Greg 👨‍💻      | <ul><li>Converting Static to Wordpress</li></ul>                                                                |
| EJ Anton 📖  | <ul><li>Improving Document</li></ul>                                                                            |

## <a name='Acknowledgements'></a>:two_hearts: Acknowledgements and References

- Rightcore project is from static website converted Wordpress with the help of Greg.

## <a name='Contribute'></a> :handshake: Contribute

Contributions, issues and feature requests are welcome!

- Issue Tracker: https://github.com/Dybreak0/Rightcore/issues
- Source Code: https://github.com/Dybreak0/Rightcore

---

Copyright © 2020 [HiPE Inc. ltd.](https://bpoc.co.jp/) All rights reserved


