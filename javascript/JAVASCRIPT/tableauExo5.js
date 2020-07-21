' function triInsert(tab)
{
    for (let i=1 ; i< (tab.length - 1) ; i++);
    {
        var posmini = i;

        for (let j = i+1; j < tab.length; j++)
        {
            if (tab[j] > tab [posmini])
            {
                posmini = j ;
            }
        }

        var temp = tab[posmini];
        tab[posmini] = tab[i];
        tab[i]= temp ; 
    }
}'