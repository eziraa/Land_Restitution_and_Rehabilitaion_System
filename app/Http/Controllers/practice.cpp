#include <iostream>
using namespace std;
struct student{
    char name[12];
    char gender;
    void set(char gender, char name[12]){
        this.gender = gender;
        this.name = name;
    void display(){
        cout<<"My name is "<< name<< " My gender";
    }

    }
}