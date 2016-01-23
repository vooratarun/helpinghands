#include<stdio.h>
#include<fcntl.h>
main(){
    char name[100];
    int  number;
    FILE *f;
    f = fopen("contacts.txt", "w");
    printf("\nNew contact name: ");
    scanf("%s", &name);
    printf("New contact number: ");
    scanf("%i", &number);
    fprintf(f, "%s\t[ %d ]\n\n", name, number);
    fclose(f);

}
