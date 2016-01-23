#include<stdio.h>
#include<fcntl.h>
main(){
    char name[100];
    printf("\nEnter your name: ");
    scanf("%s", &name);
    printf("Your Name is : %s \n",name);
}
