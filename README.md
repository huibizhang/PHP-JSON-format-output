# PHP-JSON format-output

 - APP_KEY不符 或 SQL語法執行錯誤   ->  回傳 status = false 及錯誤訊息
 - APP_KEY相符 且 SQL語法執行成功   ->  回傳 status = true  及查詢結果

--

結果圖

APP_KEY不符 或 SQL語法執行錯誤
![](https://1.bp.blogspot.com/-7DdAMWgeWlI/XO-JAbxkH1I/AAAAAAAACyc/Eshb0ZJKYCc6gZ_F91yOv_UZJ-T_4VWWACEwYBhgL/s1600/%25E5%259C%2596%25E7%2589%2587%2B767.png)

APP_KEY相符 且 SQL語法執行成功，沒查詢到資料
![](https://1.bp.blogspot.com/-VzFD-SZEsUY/XO-JCtSz-7I/AAAAAAAACyg/JvllHjqXHukl10kiqDVsv5Qgo1N9KuyXQCEwYBhgL/s1600/%25E5%259C%2596%25E7%2589%2587%2B768.png)

APP_KEY相符 且 SQL語法執行成功，查詢到 3 筆資料
![](https://1.bp.blogspot.com/-Vtkp-pu4KgI/XO-JCrHZ_LI/AAAAAAAACyk/80D6OrnHuPQgj-W6VsMinn9I_bEjLgLgQCEwYBhgL/s1600/%25E5%259C%2596%25E7%2589%2587%2B769.png)
