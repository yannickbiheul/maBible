# Java

### Ouvrir un fichier .jar
Terminal de commande
```
java -jar fichier.jar
```


## MVC
Model Vue Controller

Une autre maniède de structurer son code : le "controller" gère le changement du "model".

```
public class StudentView {

    public void printStudentDetails(String studentName, String studentRollNo) {
        System.out.println("Student : ");
        System.out.println("Name : " + studentName);
        System.out.println("Roll no : " + studentRollNo);
    }
    
}
```

```
public class StudentController {

    private Student model;
    private StudentView view;

    public StudentController(Student model, StudentView view) {

        this.model = model;
        this.view = view;
    
    }

    public void setStudentName(String name) {
        model.setName(name);
    }

    public String getStudentName() {
        return model.getName();
    }

    public void setStudentRollNo(String rollNo) {
        model.setRollNo(rollNo);
    }

    public String getStudentRollNo() {
        return model.getRollNo();
    }

    public void updateView() {
        view.printStudentDetails(model.getName(), model.getRollNo());
    }

}
```

```
public class Student {

    private String rollNo;
    private String name;

    public String getRollNo() {
        return rollNo;
    }

    public void setRollNo(String rollNo) {
        this.rollNo = rollNo;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }
    
}
```

Mediator
```
public class User {

    // DATAS
    private String name;

    // METHODES
    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public User(String name) {
        this.name = name;
    }

    public void sendMessage(String message) {
        ChatRoom.showMessage(this, message);
    }
    
}
```

Le ChatRoom est le médiateur.
```
import java.util.Date;

public class ChatRoom {

    public static void showMessage(User user, String message) {
        System.out.println(new Date().toString() + " [" + user.getName() + "] : " + message);
    }
    
}
```
```
public class Main {

    public static void main(String[] args) {
        User robert = new User("Robert");
        User john = new User("John");
        robert.sendMessage("Hi John !");
        john.sendMessage("Hello Robert !");
    }
    
}
```