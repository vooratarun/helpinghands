#include<stdio.h>
#include<dirent.h>
#include<errno.h>
#include<string.h>

int recursive(char a[])
{
	DIR *dpk=opendir(a);	
	struct dirent *mano;
	if(errno==ENOTDIR)
		{
			printf("Recursion");
		}
	else
		{
			while((mano=readdir(dpk))!=NULL)
			{
				if(mano->d_type==4)
				{
					printf("\n%s \t %d\n",mano->d_name,mano->d_type);
					strcat(a,"/");
					recursive(strcat(a,mano->d_name));
				}
				else if(mano->d_type==8)
				{
					printf("\n%s \t. %d \n",mano->d_name,mano->d_type);

				}
			}
		}

}

main()
{
recursive("Al");
}

