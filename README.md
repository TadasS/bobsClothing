# bobsClothing shop order dispatch system

Scenario
We have a client, Bobs Clothing, who sell fashion clothing online. Bob has asked us to build an order dispatch
system, for sending out customer orders with one of a number of different couriers.
At the start of a normal working day, a new batch will be started, and it will be closed at the end of the day, when no
more parcels are going to be shipped. This is called the dispatch period.
Each parcel sent out with a courier is called a consignment. Each consignment will be given a unique number - each
courier will supply an algorithm for generating their own format of consignment numbers.
At the end of each dispatch period, a list of all the consignment numbers needs to be sent to each individual courier.
The method of data transport varies from courier to courier (e.g. Royal Mail use email, ANC use anonymous FTP).
