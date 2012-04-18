<?php

echo $this->data . '<br />';
echo '<hr />';

echo '<table border="1">';

echo '<tr>';
	echo '<td>' . 'Name               '     . '</td>';
	echo '<td>' . 'Price              '     . '</td>';
	echo '<td>' . 'PerChg      '     . '</td>';
	echo '<td>' . 'Change             '     . '</td>';
	echo '<td>' . 'Volume             '     . '</td>';
	echo '<td>' . 'AvgDlyVlm     '     . '</td>';
	echo '<td>' . '50MvgAvg     '     . '</td>';
	echo '<td>' . '200MvgAvg    '     . '</td>';
	echo '<td>' . 'MrktCap          '     . '</td>';
	echo '<td>' . 'BookVl          '     . '</td>';
	echo '<td>' . 'Ebitda             '     . '</td>';
	echo '<td>' . 'DivYld      '     . '</td>';
	echo '<td>' . 'Eps                '     . '</td>';
	echo '<td>' . '52WkHi         '     . '</td>';
	echo '<td>' . '52WkLow          '     . '</td>';
	echo '<td>' . 'PE            '     . '</td>';
	echo '<td>' . 'PEGrwthRat      '     . '</td>';
	echo '<td>' . 'PrcSalesRat    '     . '</td>';
	echo '<td>' . 'PrcBookRat    '     . '</td>';
	echo '<td>' . 'ShortRat         '     . '</td>';
	#echo '<td>' . 'StockExchange      '     . '</td>';
echo '</tr>';

$stks = array('^dja','^gspc','^ixic','^gsptse','vxx','psn.to','fms.v','ngc.v','fdr.v','ort.to','am.to','tlh.to','spp.v','rle.v','pur.to');

foreach ($stks as $stk) {
	#echo $stk . ' ' . getPrice($stk). ' ' . getChange($stk) . "<br />";
	echo '<tr>';
	echo '<td>' . $stk . '</td>';
	echo '<td>' . getPrice($stk) . '</td>';
	echo '<td>' . getPercentChange($stk) . '</td>';
	echo '<td>' . getChange($stk) . '</td>';
	echo '<td>' . getVolume($stk) . '</td>';
	echo '<td>' . getAvgDailyVolume($stk) . '</td>';
	echo '<td>' . get50DayMovingAvg($stk) . '</td>';
	echo '<td>' . get200DayMovingAvg($stk) . '</td>';
	echo '<td>' . getMarketCap($stk) . '</td>';
	echo '<td>' . getBookValue($stk) . '</td>';
	echo '<td>' . getEbitda($stk) . '</td>';
	echo '<td>' . getDividendYield($stk) . '</td>';
	echo '<td>' . getEps($stk) . '</td>';
	echo '<td>' . get52WeekHigh($stk) . '</td>';
	echo '<td>' . get52WeekLow($stk) . '</td>';
	echo '<td>' . getPeRatio($stk) . '</td>';
	echo '<td>' . getPeGrowthRatio($stk) . '</td>';
	echo '<td>' . getPriceSalesRatio($stk) . '</td>';
	echo '<td>' . getPriceBookRatio($stk) . '</td>';
	echo '<td>' . getShortRatio($stk) . '</td>';
	#echo '<td>' . getStockExchange($stk) . '</td>';
	echo '</tr>';
}

echo '</table>';
echo '<hr />';


sleep(5);


echo '<hr />';

echo '<table border="1">';

echo '<tr>';
	echo '<td>' . 'Name               '     . '</td>';
	echo '<td>' . 'Price              '     . '</td>';
	echo '<td>' . 'PerChg      '     . '</td>';
	echo '<td>' . 'Change             '     . '</td>';
	echo '<td>' . 'Volume             '     . '</td>';
	echo '<td>' . 'AvgDlyVlm     '     . '</td>';
	echo '<td>' . '50MvgAvg     '     . '</td>';
	echo '<td>' . '200MvgAvg    '     . '</td>';
	echo '<td>' . 'MrktCap          '     . '</td>';
	echo '<td>' . 'BookVl          '     . '</td>';
	echo '<td>' . 'Ebitda             '     . '</td>';
	echo '<td>' . 'DivYld      '     . '</td>';
	echo '<td>' . 'Eps                '     . '</td>';
	echo '<td>' . '52WkHi         '     . '</td>';
	echo '<td>' . '52WkLow          '     . '</td>';
	echo '<td>' . 'PE            '     . '</td>';
	echo '<td>' . 'PEGrwthRat      '     . '</td>';
	echo '<td>' . 'PrcSalesRat    '     . '</td>';
	echo '<td>' . 'PrcBookRat    '     . '</td>';
	echo '<td>' . 'ShortRat         '     . '</td>';
	#echo '<td>' . 'StockExchange      '     . '</td>';
echo '</tr>';

$stks = array('yri.to','ssl.v','bto.to','srk.v','lmr.v','gph.v','nz.v','tbe.to','frc.to','cvv','dmnd','cpe','sd','qcor','jazz','rht','hek','bac','ziop');

foreach ($stks as $stk) {
	#echo $stk . ' ' . getPrice($stk). ' ' . getChange($stk) . "<br />";
	echo '<tr>';
	echo '<td>' . $stk . '</td>';
	echo '<td>' . getPrice($stk) . '</td>';
	echo '<td>' . getPercentChange($stk) . '</td>';
	echo '<td>' . getChange($stk) . '</td>';
	echo '<td>' . getVolume($stk) . '</td>';
	echo '<td>' . getAvgDailyVolume($stk) . '</td>';
	echo '<td>' . get50DayMovingAvg($stk) . '</td>';
	echo '<td>' . get200DayMovingAvg($stk) . '</td>';
	echo '<td>' . getMarketCap($stk) . '</td>';
	echo '<td>' . getBookValue($stk) . '</td>';
	echo '<td>' . getEbitda($stk) . '</td>';
	echo '<td>' . getDividendYield($stk) . '</td>';
	echo '<td>' . getEps($stk) . '</td>';
	echo '<td>' . get52WeekHigh($stk) . '</td>';
	echo '<td>' . get52WeekLow($stk) . '</td>';
	echo '<td>' . getPeRatio($stk) . '</td>';
	echo '<td>' . getPeGrowthRatio($stk) . '</td>';
	echo '<td>' . getPriceSalesRatio($stk) . '</td>';
	echo '<td>' . getPriceBookRatio($stk) . '</td>';
	echo '<td>' . getShortRatio($stk) . '</td>';
	#echo '<td>' . getStockExchange($stk) . '</td>';
	echo '</tr>';
}

echo '</table>';
echo '<hr />';




