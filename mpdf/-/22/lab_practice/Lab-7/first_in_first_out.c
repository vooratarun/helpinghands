#include<stdio.h>
int main()
{
int i,j,n,a[50],frame[50],k,avail,count=0,no;
printf("enter no of pages:\n");
scanf("%d",&n);
printf("enter page numbers:\n");
for(i=1;i<=n;i++)
scanf("%d",&a[i]);
printf("enter no of frames:");
scanf("%d",&no);
printf("initially frame is:");
for(i=0;i<no;i++)
{
frame[i]=-1;
printf("%d\t",frame[i]);
}
j=0;
printf("\nref string\tpageframes\n");
for(i=1;i<=n;i++)
{
printf("%d\t\t",a[i]);
avail=0;
for(k=0;k<no;k++)
 if(frame[k]==a[i])
avail=1;
if(avail==0)
{
frame[j]=a[i];
j=(j+1)%no;
count++;
for(k=0;k<no;k++)
printf("%d\t",frame[k]);
}
printf("\n");
}
printf("page fault is %d",count);
}
