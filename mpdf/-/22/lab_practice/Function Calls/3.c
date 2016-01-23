#include <stdio.h>
int main()
{
	FILE *fs,*ft;
	char ch;
	fs=fopen("in1.txt","r");
	ft=fopen("out1.txt","w");
	while(1)
	{
		ch=fgetc(fs);
		if(ch==EOF)
			break;
		fputc(ch,ft);
		}
		fclose(fs);
		fclose(ft);
	return 0;
}
