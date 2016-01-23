#include <stdio.h>
int main()
{
	FILE *fp;
	char ch;
	fp=fopen("in1.txt","r");
	while(1){
		ch=fgetc(fp);
		if(ch==EOF)
			break;
		printf("%c",ch);
	}
	return 0;
}
