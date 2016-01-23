#include <stdio.h>
int main()
{
	FILE *fs1,*fs2,*fr;
	char ch1,ch2;
	fs1=fopen("in1.txt","r");
	fs2=fopen("in2.txt","r");
	fr=fopen("out2.txt","w");
	if(fs1!=NULL && fs2!=NULL){
		while((ch1=fgetc(fs1))!=EOF){
			fputc(ch1,fr);
			if(ch1=='\n'){
				while((ch2=fgetc(fs2))!=EOF){
					fputc(ch2,fr);
					if(ch2=='\n'){
						break;
					}
				}				
			}
		}
		while((ch1=fgetc(fs1))!=EOF)
			fputc(ch1,fr);
		while((ch2=fgetc(fs2))!=EOF)
			fputc(ch2,fr);
	}
	fclose(fr);
	fclose(fs1);
	fclose(fs2);
	return 0;
}
