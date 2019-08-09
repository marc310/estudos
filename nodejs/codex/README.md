# node-js_base_system

# aplicativo de testes em nodeJs
# desenvolvimento de estudo da estrutura MVC

//-----------------------------------------------------------------------------//

>> npm install express-generator -g

inicio do desenvolvimento com express framework

>> express --view=ejs /*nome do app*/

//-----------------------------------------------------------------------------//

mudando estrutura de pastas MVC

>> app
>>> controller
>>> models
>>> views
>>> routes

ajustada a rota no app.js

//-----------------------------------------------------------------------------//

nodemon instalado para facilitar o desenvolvimento

>> npm install nodemon -g

execute o projeto utilizando o nodemon use:

>> nodemon

ao inves de
>> npm start

//-----------------------------------------------------------------------------//

adicionando jshint e mysql ao package.json

>> npm install

testes pelo jshint sendo configurados no package.json

>> npm run-script jsh

//-----------------------------------------------------------------------------//

iniciando desenvolvimento TDD com Jasmine

adicionado ao package.json

>> npm run-script test

//-----------------------------------------------------------------------------//

#
#Observações de estudos
#

Como iniciar aplicação

>> npm start // no modo manual
>> nodemon // no modo automatico

Como validar o código

>> npm run-script jsh

Rodar os menus testes unitários (TDD) - Teste que guia o desenvolvimento

>> npm run-script test
