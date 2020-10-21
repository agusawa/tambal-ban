# TodoList Code OOP Week 2-6

## references: 
1. MVC Github: https://github.com/daveh/php-mvc
2. MVVM Blog: https://windwalker.io/documentation/3.x/mvc/view-model.html
3. Ebook PHP: check link drive week 1
___
## Rule of Source Code Week 2-6:
1. Create Folder
2. Create Abstract
3. Create Class & Interface (Mixin[optional])
4. Create Variable & Method (Polymorphism)

___
## Pattern of Scratch Week 3-6:
___
### Scratch Week 3-6:
1. Models
2. Core
3. Views

### Example of Case Study & Implmentation The Feature (Bank Online System)[Scratch]
1. Model [abstract, Class] => User, Bank Product 
   * User
     * attribute:username, email, password, datetime
     * behavior:insertUsername, insertEmail, startdate, enddate
   * Bank Product
     * attribute:deposit, withdraw, saldo
     * behavior:setDeposit, getDeposit, setWithdraw, getWithdraw, getSaldo, startdate, enddate
2. View [abstract, Class, Interface] => AccountHtmlView, BankProductHtmlView, LoginHtmlView, RegisterHtmlView
3. Core [abstract, Class, Interface] => CheckInput, CheckOuput, CheckDatabase, CheckView   
   * CheckInput: CheckUsername, CheckEmail, CheckPassword
   * CheckOutput: CheckSaldo, CheckDeposit, CheckWithdraw
   * ManagementDatabase: ConfigDatabase, InsertTable, InsertRow, UpdateRow, DeleteRow, ReadTable, ReadRow
   * ManagementView: UseAccount, UseBankProduct, UseLogin, UseRegister

### NextProgress (Check Folder and File):
1. Core ==> checker input and ouput, use method of Models and Views
2. Models ==> define object & method, initial object
3. Views ==> tempalte view 

___
## Draw UML Diagram ==> Week-8