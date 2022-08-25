#include<stdio.h>

int main()
{
	int n=2;

	for(n;n<=18;n+=2)
		if(n%4!=0)
			printf("%d ", n);
}