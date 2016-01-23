#include <stdio.h>
int main()
{
	FILE *fp;
	int line_count=0,word_count=0,vowel_count=0,char_count=0;
	char ch;
	fp=fopen("in1.txt","r");
	while(1)
	{
		ch=fgetc(fp);
		if(ch==EOF)
			break;
		char_count++;		
		if(ch=='\n')
			line_count++;
		if(ch==' ' || ch=='\t' || ch=='\n')	
			word_count++;
		if(ch=='a'||ch=='e'||ch=='i'||ch=='o'|| ch=='u')
			vowel_count++;
		if(ch=='A'||ch=='E'||ch=='I'||ch=='O'|| ch=='U')
			vowel_count++;
	}
	printf("Number of Vowels in given file is: %5d",vowel_count);
	printf("\nNumber of Lines  in given file is:  %4d",line_count);
	printf("\nNumber of Words in given file  is:   %3d",word_count);
	printf("\nNumber of Characters in given file is:%d\n",char_count);
	return 0;
}
