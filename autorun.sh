#!/bin/bash
while true;
do 
	curl http://localhost/buydo/index.php/item/announceAllBidItemWinner
	curl http://127.0.0.1/buydo/index.php/item/payTimeOutAll
	sleep 2m
done
