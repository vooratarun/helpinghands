#include<stdio.h>
int pn,ct=1,index;
int search(char ar[],char x)
{
	int i,j;
	for (i=0;i<pn;i++)
	{
		if(ar[i]==x)
		{
			index=i;
			return 1;
		}
	}
	return 0;
}
int getindex(int ar1[])
{
	int i,min=-1,x=-1;
	for(i=0;i<pn;i++)
	{
		if(min==-1 || min>ar1[i])
		{
			min=ar1[i]; x=i;
		}			
	}
	if(x==-1)
		return -1;
	return x;
}

main()
{
	int sn,i,j,pf=0,x=0;
	printf("Enter paging Array size :-\t");
	scanf("%d",&pn);
	printf("Enter Sequence Length:-\t");
	scanf("%d",&sn);
	char pga[pn],p[sn],*seq;
	int pga1[pn];
	seq=p;
	for(i=0;i<pn;i++)
	{
		pga[i]=-1;	pga1[i]=-1;	printf("%d",pga[i]);
	}
	printf("\nEnter sequence of ints for paging\n");
	scanf("%s",seq);
	int y=1;
	for(i=0;i<=sn;i++)
	{
		printf("----------------------------------\n");
		for(j=0;j<pn;j++)
		{	printf("%c ",pga[j]) ;	}
		printf("\t| %c result %d |\t %d \n",p[i],search(pga,p[i]),pf);
		for(j=0;j<pn;j++)
		{	printf("%d ",pga1[j]) ;	}
		printf("\n");
		if(!search(pga,p[i]))
		{
			if(y<pn)
			{
				pga[x]=p[i];
				pga1[x]=ct;
				x++;ct++;
				pf++;
				x=x%pn;
			}
			else
			{
				x=getindex(pga1);
				printf("\n index %d\n",getindex(pga1));
				x=x%pn;
				pga[x]=p[i];
				pga1[x]=ct;
				ct++;pf++;
			}
		}
		else
		{
			y--;
			pga1[index]=ct;
			ct++;
			printf("Accessed index %d val %d \n",index,pga1[index]);
			
		}
		y++;
	}
	printf("----------------------------------\n");
	printf("\nPaga Fault Count is :- %d \n ",pf-1);
}
