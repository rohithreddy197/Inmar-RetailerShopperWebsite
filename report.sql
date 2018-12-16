●	Write SQL to get the number of retailers available in the system.
>>>>SELECT COUNT(pno) FROM `retailer`;



●	Write SQL to get the shoppers counts for each retailer (who purchased).
>>>>select DISTINCT rid,count(sid) from retshop group by rid;


●	Write SQL to get all the shoppers count.
>>>>SELECT count(uname) FROM `shopper`;


●	Write SQL to get purchase amount per day wrt to a retailer.
>>>>select rid,sum(amount),date from retshop group by rid;



●	Write SQL to find top retailer based on the number of purchases 



●	Write SQL to find a loyal shopper of any retailer based on the number of purchased more than threshold 5 
>>>>select rid,sid from retshop group by rid having count(sid)>5;