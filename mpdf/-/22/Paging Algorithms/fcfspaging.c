#include<stdio.h>
int pn;
int search(char ar[],char x)
{
	int i,j;
	for (i=0;i<pn;i++)
	{
		if(ar[i]==x)
			return 1;
	}
	return 0;
}
main()
{
	int sn,i,j,pf=0,x=0;
	printf("Enter paging Array size :-\t");
	scanf("%d",&pn);
	printf("Enter Sequence Length:-\t");
	scanf("%d",&sn);
	char pga[pn],p[sn],*seq;
	seq=p;
	for(i=0;i<pn;i++)
	{
		pga[i]=-1;	printf("%d",pga[i]);
	}
	printf("\nEnter sequence of ints for paging\n");
	scanf("%s",seq);
	for(i=0;i<=sn;i++)
	{
		printf("----------------------------------\n");
		for(j=0;j<pn;j++)
		{	printf("%c  ",pga[j]) ;	}
		printf("\t| %c result %d |\t %d \n",p[i],search(pga,p[i]),pf);
		if(!search(pga,p[i]))
		{
			pga[x]=p[i];
			x++;
			pf++;
			x=x%pn;
		}
	}
	printf("----------------------------------\n");
	printf("\nPaga Fault Count is : %d \n ",pf-1);
}

