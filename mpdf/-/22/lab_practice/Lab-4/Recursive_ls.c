#include<stdio.h>
#include<dirent.h>
#include<errno.h>
#include<string.h>
main()
{
	DIR *d;
	char c[1000000]=".";
	d=opendir(c);
	//struct dirent *myfile;
	Ls(d,c);
}
Ls(DIR *d,char c[])
{
	DIR *dd;
	int i=0,j=0;
	
	struct dirent *Mmyfile;
	
	if(errno==ENOTDIR){
		printf("");
	}
	else
	{
	while((Mmyfile=readdir(d))!=NULL)
	{
		
		
		if(Mmyfile->d_type==8)
		{
			printf("    %s\n",Mmyfile->d_name);
		}
		else if(Mmyfile->d_type==4)
		{
			if((strcmp(Mmyfile->d_name,"..")&&strcmp(Mmyfile->d_name,".")))
			{
			strcat(c,"/");
			strcat(c,Mmyfile->d_name);
			
			printf("       %s\n",c);
			dd=opendir(c);
			Ls(dd,c);
			}
				
		}

	}
	for(i=0;i<j;i++)
	{
	printf("--");
	}j++;
	c=strcat(c,"/..");
	
	}
	closedir(d);
	
		
}
