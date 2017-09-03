# There are two pages one for displaying the data fetched from the database and the other for processing the poloniex API
# index.php displays the data
# process.php processes the poloniex API
# There are two tables in the database one for the previous data (previous table) and the for the current data (current table)
# The poloniex API will be processed every 5mins
# Once the index.php page is accessed, it queries the previous table and fetches the data and also the time the data was saved. It then compares with the current time if it exceeds or  # is equal to 5mins it redirects to the process.php which then fetches new data, delete all data from the previous table, move all data in the current table to the previous table and  # stored fetched data in the current table.
