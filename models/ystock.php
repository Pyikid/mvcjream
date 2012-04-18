<?php

	/*This module provides a PHP API for retrieving stock data from Yahoo Finance.
	 * This module is inspired from ystockquote.py
	 * You are free to use modify distribute and redistribute a small credit will be appreciated
	 * $allValue = getAllData('GEOMETRIC.NS');
	 * print_r($allValue);
	 * $allValue = getChange('GEOMETRIC.NS');
	 * print_r($allValue);
	 * 
	*/

	function request($symbol,$stat)
	{
		$separator = ',';
		$local = 'download';
		$file = 'http://'.$local.'.finance.yahoo.com/d/quotes.csv?s='.$symbol.'&f='.$stat.'=.csv';
		print $file;
		#print $file;
		$handle = fopen($file, "r");
		$data = fgetcsv($handle, 4096, $separator);
		fclose($handle);
		return $data;		
	}

	function getAllData($symbol)
	{
		$data = request($symbol, 'l1c1va2xj1b4j4dyekjm3m4rr5p5p6s7');
		$allData = array(	'price'=>$data[0],
    					 	'change'=>$data[1],
    					 	'volume'=>$data[2],
    						'avg_daily_volume'=>$data[3],
    						'stock_exchange'=>$data[4],
    						'market_cap'=>$data[5],
    						'book_value'=>$data[6],
    						'ebitda'=>$data[7],
    						'dividend_per_share'=>$data[8],
    						'dividend_yield'=>$data[9],
    						'earnings_per_share'=>$data[10],
    						'fiftytwo_week_high'=>$data[11],
    						'fiftytwo_week_low'=>$data[12],
    						'fiftyday_moving_avg'=>$data[13],
    						'twohundredday_moving_avg'=>$data[14],
    						'price_earnings_ratio'=>$data[15],
    						'price_earnings_growth_ratio'=>$data[16],
    						'price_sales_ratio'=>$data[17],
    						'price_book_ratio'=>$data[18],
    						'short_ratio'=>$data[19],);
		return $allData;
	}
	
	function getPrice($symbol)
	{
		$tmpArr =  request($symbol, 'l1');
		$price = $tmpArr[0];
		return $price;
		
	}
	
	function getChange($symbol)
	{
		$tmpArr =  request($symbol, 'c1');
		$change = $tmpArr[0];
		return $change;
		
	}
	
	function getVolume($symbol)
	{
		$tmpArr =  request($symbol, 'v');
		$volume = $tmpArr[0];
		return $volume;
		
	}
	
	function getAvgDailyVolume($symbol)
	{
		$tmpArr =  request($symbol, 'a2');
		$avgDailyVolume = $tmpArr[0];
		return $avgDailyVolume;		
	}
	
	function getStockExchange($symbol)
	{
		$tmpArr =  request($symbol, 'x');
		$stockExchange = $tmpArr[0];
		return $stockExchange;
		
	}
	
	function getMarketCap($symbol)
	{
		$tmpArr =  request($symbol, 'j1');
		$marketCap = $tmpArr[0];
		return $marketCap;
		
	}
	
	function getBookValue($symbol)
	{
		$tmpArr =  request($symbol, 'b4');
		$bookValue = $tmpArr[0];
		return $bookValue;
		
	}
	
	function getEbitda($symbol)
	{
		$tmpArr =  request($symbol, 'j4');
		$ebitda = $tmpArr[0];
		return $ebitda;
		
	}
	
	function getDividendPerShare($symbol)
	{
		$tmpArr =  request($symbol, 'd');
		$dividendPerShare = $tmpArr[0];
		return $dividendPerShare;
		
	}
	
	function getDividendYield($symbol)
	{
		$tmpArr =  request($symbol, 'y');
		$dividendYield = $tmpArr[0];
		return $dividendYield;
		
	}
	
	function getEps($symbol)
	{
		$tmpArr =  request($symbol, 'e');
		$eps = $tmpArr[0];
		return $eps;
	}
	
	function get52WeekHigh($symbol)
	{
		$tmpArr =  request($symbol, 'k');
		$fftyWeekHigh = $tmpArr[0];
		return $fftyWeekHigh;
	}
	function get52WeekLow($symbol)
	{
		$tmpArr =  request($symbol, 'j');
		$fftyWeekLow = $tmpArr[0];
		return $fftyWeekLow;
		
	}
	function get50DayMovingAvg($symbol)
	{
		$tmpArr =  request($symbol, 'm4');
		$fftyMovAvg = $tmpArr[0];
		return $fftyMovAvg;
		
	}
	
	function get200DayMovingAvg($symbol)
	{
		$tmpArr =  request($symbol, 'm3');
		$twdMovAvg = $tmpArr[0];
		return $twdMovAvg;
		
	}
	function getPeRatio($symbol)
	{
		$tmpArr =  request($symbol, 'r');
		$peRatio = $tmpArr[0];
		return $peRatio;
	}
	
	function getPeGrowthRatio($symbol)
	{
		$tmpArr =  request($symbol, 'r5');
		$peGrRatio = $tmpArr[0];
		return $peGrRatio;
	}
	
	function getPriceSalesRatio($symbol)
	{
		$tmpArr =  request($symbol, 'p5');
		$prSalRatio = $tmpArr[0];
		return $prSalRatio;
	}
	function getPriceBookRatio($symbol)
	{
		$tmpArr =  request($symbol, 'p6');
		$prBkRatio = $tmpArr[0];
		return $prBkRatio;
	}
	function getShortRatio($symbol)
	{
		$tmpArr =  request($symbol, 's7');
		$shortRatio = $tmpArr[0];
		return $shortRatio;
	}
	

?>