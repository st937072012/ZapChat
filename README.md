##ZapChat

 ## Init
  1. 前端使用 bootstrap 框架構成
  2. 後端使用 php simpleXML 存取資料
  3. 資料使用 xml 檔案儲存
  4. 聊天運作過程如下；
    (1) A 輸入了一串訊息，不使用表單提交的方式，單純偵測Enter事件
    (2) 偵測到 Enter 事件後，判斷訊息是否為空，使用 AJAX 送出，不刷新頁面
    (3) 網頁每秒會用 AJAX 刷新留言區所有留言，看起來就像是真的在聊天一樣
    (4) 登入機制目前是寫死的，必須擁有權限才可以玩
  ##Future

  (1) 不重複載入已經顯示的留言
  (2) 增加可以留圖片的功能
  (3) 增加表情符號的功能
  (4) 第一次不載入所有留言，使用者要點選"觀看以前訊息"，再用AJAX載入
