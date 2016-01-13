<?php
// Version: 2015040101
// Date: 2015-04-01
// Language: zh_tw

$string['addsubmission'] = '添加提交物件 ';
$string['allowlate'] = '在截止日期後允許提交物件';
$string['allsubmissions'] = '提交收件匣 ';
$string['anon'] = '匿名';
$string['anonenabled'] = '開啟匿名標示';
$string['anytype'] = '任何提交物件類型 ';
$string['assigngeterror'] = '無法取得 turnitintooltwo 數據';
$string['ced'] = '課程結束日期';
$string['classcreationerror'] = 'Turnitin 課程建立過程失敗';
$string['classupdateerror'] = '無法更新 Turnitin 課程數據';
$string['configureerror'] = '在課程內使用此模組之前，您必須先完全更改它的設定。 請聯繫您的 Moodle 管理員。';
$string['connecttest'] = '測試 Turnitin 連接 ';
$string['connecttestcommerror'] = '無法連線至 Turnitin。請再次檢查您的 API URL 設置。 ';
$string['connecttesterror'] = '連線至 Turnitin 時有誤。錯誤回覆訊息如下：<br />';
$string['connecttestsuccess'] = 'Moodle 已成功地連線至 Turnitin';
$string['copyrightagreement'] = '一旦勾選此框格，我確認我的提交物件是我自己的作品。我接受所有可能因提交此物件而造成的侵權之責任。 ';
$string['coursegeterror'] = '無法獲得課程數據';
$string['courseiderror'] = '課程代號錯誤';
$string['deleteconfirm'] = '您確定您想要刪除此提交物件嗎？\n\n此動作是無法還原的。';
$string['deletesubmission'] = '刪除提交物件 ';
$string['downloadsubmission'] = '下載提交物件 ';
$string['dtdue'] = '截止日期';
$string['dtpost'] = '公佈日期';
$string['dtstart'] = '開始日期';
$string['excludebiblio'] = '排除參考書目';
$string['excludepercent'] = '百分比';
$string['excludequoted'] = '排除引用資料';
$string['excludequoted_help'] = '此設定允許指導教師在產生原創性報告時選擇排除引文內的內文使其不被檢查相符處。此設定可以在各個原創性報告內撤銷。';
$string['excludevalue'] = '排除較小的相符處';
$string['excludevalue_help'] = '此設定允許指導教師在產生原創性報告時選擇排除長度不夠長的相符處（由指導教師設定）使其不被考慮。此設定可以在各個原創性報告內撤銷。';
$string['excludewords'] = '字';
$string['filetosubmit'] = '欲提交的文檔';
$string['filetosubmit_help'] = '當提交文檔至一個作業部分，瀏覽您的電腦以尋找您要使用此格式上傳的文檔';
$string['fileupload'] = '文檔上傳';
$string['genduedate'] = '在截止日期當天產生報告 （在截止日期前允許重新提交）';
$string['genimmediately1'] = '即刻產生報告（不允許重新提交）';
$string['genimmediately2'] = '即刻產生報告（在截止日期前允許重新提交）';
$string['institutionalrepository'] = '機構存庫 （適用時）';
$string['institutionalchecksettings'] = '與<br />機構存庫對證';
$string['institutionalcheck'] = '與機構存庫對證';
$string['internetcheck'] = '與網絡比較';
$string['internetcheck_help'] = '當為文稿處理原創性報告時與 Turnitin 網絡儲存庫比較。如果這沒有被選擇的話，相似處指數百分比可能下降。';
$string['journalcheck'] = '與雜誌、<br />期刊與刊物比較';
$string['journalcheck_help'] = '當為文稿處理原創性報告時與 Turnitin 雜誌、期刊與刊物儲存庫比較。如果這沒有被選擇的話，相似處指數百分比可能下降。';
$string['maxfilesize'] = '最高文檔大小';
$string['maxfilesize_help'] = '此設定決定用戶提交至每個作業部分的物件之最高文檔大小。您可以設置的最高值數值被課程設定內所設的數值支配，而此數值被限制為 40Mb，也就是上傳至 Turnitin 的物件的最高值。';
$string['maxlength'] = ' {$a->field} 的最大的長度為 {$a->length} 字符';
$string['maxmarks'] = '最高分數';
$string['pluginname'] = 'Turnitin 作業 2';
$string['modulename'] = 'Turnitin 作業 2';
$string['modulenameplural'] = 'Turnitin 作業';
$string['moduleversion'] = '版本';
$string['mysubmissions'] = '我的提交物件 ';
$string['nolimit'] = '無限制';
$string['nonmoodlestudents'] = '非 Moodle 學生';
$string['nonmoodleuser'] = '非 Moodle 用戶';
$string['norepository'] = '無存庫';
$string['nosubmissions'] = '尚未提交物件 ';
$string['notavailableyet'] = '不可使用';
$string['numberofparts'] = '部分數量 ';
$string['numberofparts_help'] = '允許建立有多部分的作業，每個用戶可以提交作品至每一部分。';
$string['overallgrade'] = '總體分數';
$string['overallgrade_help'] = '總體分數決定總體作業所允許的成績上限。作業的每一部分將會被分配到一部分的成績，然後按照比例總和以計算總體分數。';
$string['partdberror'] = '輸入第 {$a} 部分至數據庫時有誤<br />';
$string['partdeleteerror'] = '無法刪除作業部分{$a}數據';
$string['partdeletewarning'] = '您嘗試刪除的作業部分包含著提交物件。若您刪除此作業部分，您將會喪失這些提交部分。\n\n 您確定要繼續?';
$string['partposterror'] = '截止日期必須在公佈日期前。';
$string['partnameerror'] = '部分名稱不可為空白。';
$string['partdueerror'] = '截止日期必須在公佈日期前。';
$string['pending'] = '未決的';
$string['permissiondeniederror'] = '您尚未獲得正確的許可以完成所請求的動作';
$string['portfolio'] = '組合夾';
$string['proxypassword'] = 'Proxy 密碼';
$string['proxypassword_desc'] = '<b>[可選]</b><br />若您的 proxy 需要驗證，請在此輸入密碼';
$string['proxyport'] = 'Proxy 槽';
$string['proxyport_desc'] = '<b>[可選]</b><br />若您的伺服器使用 Proxy 來連接網絡，請在此輸入 proxy 槽。';
$string['proxyurl'] = 'Proxy URL';
$string['proxyurl_desc'] = '<b>[可選]</b><br />若您的伺服器使用 Proxy 來連接網路，請在此輸入 proxy 網址。';
$string['proxyuser'] = 'Proxy 用戶名稱';
$string['proxyuser_desc'] = '<b>[可選]</b><br />若您的 proxy 需要驗證，請在此輸入用戶名稱。 ';
$string['reportgenspeed'] = '產生報告速度';
$string['resubmission'] = '重新提交';
$string['resubmissiongradewarn'] = '在截止日期前皆可以重新提交。若文稿被重新提交，任何成績都將會被刪除。您想要繼續嗎?';
$string['resubmit'] = '重新提交';
$string['reveal'] = '顯示';
$string['revealerror'] = '若要顯示學生姓名，您必須要有正當的理由';
$string['revealreason'] = '顯示學生姓名的理由';
$string['saveusage'] = '儲存數據轉儲';
$string['selectoption'] = '選擇選項 ';
$string['showusage'] = '顯示數據轉儲';
$string['spapercheck'] = '跟已儲存的學生文稿做比較 ';
$string['spapercheck_help'] = '當為文稿處理原創性報告時與 Turnitin 學生文稿儲存庫比較。如果這沒有被選擇的話，相似處指數百分比可能下降。';
$string['standardrepository'] = '標準存庫';
$string['student'] = '學生';
$string['studentreports'] = '顯示原創性報告給學生';
$string['studentreports_help'] = '允許您顯示 Turnitin 原創性報告給學生用戶。 若設定為“確定”，Turnitin 製作的原創性報告將可被學生檢視。 ';
$string['studentstatus'] = '已提交 {$a->modified} (文稿代碼: {$a->objectid}';
$string['submissiondeleteerror'] = '無法刪除提交物件 ';
$string['submissionfileerror'] = '您必須附加文檔才能提交';
$string['submissionfiletypeerror'] = '不允許此文檔類型。允許的類型為 ({$a})';
$string['submissiongeterror'] = '無法獲得提交數據';
$string['submissiongrade'] = '成績';
$string['submissionpart'] = '提交部分';
$string['submissionpart_help'] = '選擇此文稿提交至的 Turnitin 作業部分';
$string['submissions'] = '提交物件 ';
$string['submissiontexterror'] = '為此提交物件，您必須包含文字';
$string['submissiontitle'] = '提交標題';
$string['submissiontitle_help'] = '請為您提交的作品輸入標題 ';
$string['submissiontitleerror'] = '您必須為此提交物件添加標題 ';
$string['submissiontype'] = '提交物件類型 ';
$string['submissiontype_help'] = '<p>顯示您被允許提交至 Turnitin 的提交物件類型。選項包括：</p>';
$string['submissionupdateerror'] = '無法更新提交數據';
$string['submissionuploadsuccess'] = '您的提交物件已成功上傳至 Turnitin。 ';
$string['submitpaper'] = '提交文稿';
$string['submitpapersto'] = '儲存學生文稿';
$string['submitpapersto_help'] = '此設定提供指導教師旋轉是否將文稿儲存在 Turnitin 學生文稿儲存庫的能力。提交文稿至學生文稿儲存庫的好處是提交至作業的學生文稿將會更您目前和之前的課程內的提交物件做比較。若您選擇，“無儲存庫”，您的學生文稿將不會被儲存在 Turnitin 學生文稿儲存庫內。';
$string['submitted'] = '更改';
$string['submittoturnitin'] = '提交至 Turnitin';
$string['textsubmission'] = '文字提交';
$string['texttosubmit'] = '欲提交的文字';
$string['texttosubmit_help'] = '在此欄框內剪貼您提交物件的文字內容';
$string['title'] = '標題';
$string['turnitinaccountid'] = 'Turnitin 帳戶代號';
$string['turnitinaccountid_desc'] = '<b>[要求]</b><br />輸入您的 Turnitin 主要帳戶的代碼';
$string['turnitinanon'] = '匿名標示';
$string['turnitinanon_help'] = '只要把此項目設定為“確定”，您就可以在您的 Turnitin 作業上使用匿名標示。 一旦在作業上開啟匿名標示， 就無法關閉該功能。 ';
$string['turnitinapiurl'] = 'Turnitin API URL';
$string['turnitindeleteconfirm'] = '刪除文稿將會使它們從提交清單和收件匣中移除，但不會完全地從\n Turnitin 數據庫移除。\n\n您確定您要刪除此提交物件嗎？一旦做此動作將無法還原。';
$string['turnitindeletionerror'] = 'Turnitin 提交刪除失敗。電腦上的 Moodle 副本已被移除，但在 Turnitin 內的提交物件無法被刪除。';
$string['turnitinenrolstudents'] = '為所有學生註冊';
$string['turnitinloading'] = '一致化數據';
$string['turnitinpart'] = '第 {$a} 部分';
$string['turnitinrefreshsubmissions'] = '更新提交物件';
$string['turnitinsecretkey'] = 'Turnitin 共用鍵 ';
$string['turnitinsecretkey_desc'] = '<b>[要求]</b><br />輸入您的 Turnitin 共用鍵 <br /><i>(由您的 Turnitin 管理員設定)</i>';
$string['turnitintooltwo'] = 'Turnitin 工具';
$string['turnitintooltwo:admin'] = '管理 Turnitin 工具';
$string['turnitintooltwo:grade'] = '評估 Turnitin 工具作業';
$string['turnitintooltwo:submit'] = '提交至 Turnitin 工具作業';
$string['turnitintooltwo:view'] = '檢視 Turnitin 工具作業';
$string['turnitintooltwoagreement'] = '否認聲明/同意書';
$string['turnitintooltwoagreement_default'] = '一旦勾選此欄框，我確認此提交物件是我的創作，我亦接受所有可能因提交此物件而產生的侵權之責任。';
$string['turnitintooltwointro'] = '總結';
$string['turnitintooltwoname'] = 'Turnitin 作業名稱';
$string['turnitintooltworesetdata0'] = '複製 Turnitin 作業 <i>(建立副本, 新 Turnitin 課程)';
$string['turnitintooltworesetdata1'] = '取代 Turnitin 作業 <i>(取代作業部分, 重新使用 Turnitin 課程)';
$string['turnitintooltworesetdata2'] = '讓 Turnitin 作業保持原狀 ';
$string['turnitintooltworesetinfo'] = '為在此課程的 Turnitin 作業選擇以下的一個選項 ';
$string['turnitintooltwoupdateerror'] = '無法更新 turnitintooltwo 數據';
$string['turnitintooltwoagreement_desc'] = '<b>[非必須的]</b><br />輸入一個提交的同意確認聲明。<br />(<b>注意:</b> 若同意完全是空白的，學生在提交時就無需有同意確認)';
$string['turnitintooltwodeleteerror'] = '無法刪除 turnitintooltwo 數據';
$string['turnitintooltwogeterror'] = '無法獲得 turnitintooltwo 數據';
$string['turnitinuseanon'] = '使用匿名標示';
$string['turnitinuseanon_desc'] = '選擇是否在為提交物件評分時允許匿名標示。<br /><i>(唯有在帳戶設定匿名標示的用戶才可使用此功能)';
$string['turnitinusegrademark'] = '使用 GradeMark';
$string['turnitinusegrademark_help'] = '使用此設置以選擇是否使用 Turnitin GradeMark 或Moodle 來為提交物件評分';
$string['turnitinusegrademark_desc'] = '選擇是否使用 Turnitin GradeMark 或Moodle 來為提交物件評分。<br /><i>(唯有在帳戶設定 GradeMark 的用戶才可使用此功能)';
$string['turnitinuserepository'] = '開啟機關存庫';
$string['turnitinuserepository_desc'] = '選擇是否在 Turnitin 作業內使用機關存庫。<br /><i>(唯有機關存庫的用戶才可使用此功能)<br /><i>';
$string['turnitintutorsremove'] = '您確定您要從 Turnitin 內的課程中移除此輔導教師嗎？';
$string['turnitinuserepository_help'] = '用此設置以在作業設定視窗內開啟機關存庫。';
$string['tutorstatus'] = '{$a->submitted}/{$a->total} 學生提交物件, {$a->graded} 提交{$a->gplural} 已評分 ';
$string['type'] = '提交物件類型 ';
$string['types'] = '提交物件類型 ';
$string['types_help'] = '<p>提交物件可以有兩種不同的形式。複製和粘貼或檔案上傳。</p>';
$string['unlinkusers'] = '解除用戶鏈接';
$string['usercreationerror'] = 'Turnitin 用戶建立失敗';
$string['userdeleteerror'] = '無法刪除用戶數據';
$string['usergeterror'] = '無法獲得用戶數據';
$string['userstounlink'] = '結束鏈接的用戶';
$string['userupdateerror'] = '無法更新用戶數據';
$string['viewreport'] = '檢視報告';
$string['wrongaccountid'] = '鏈接您的 Turnitin 課程時有誤。您設置的帳戶為帳戶 {$a->current}。 此課程源自於帳戶 {$a->backupid}。您僅可以復原從同一個 Turnitin 帳戶的課程。';
$string['copyassigndata'] = '複製 Turnitin 作業數據';
$string['replaceassigndata'] = '取代 Turnitin 作業數據';
$string['downloadexport'] = '外傳';
$string['downloadorigzip'] = '壓縮檔（原始格式）';
$string['downloadpdfzip'] = '壓縮檔（PDF）';
$string['downloadgradexls'] = '分數外傳（XLS）';
$string['turnitintutors'] = 'Turnitin 輔導教師';
$string['turnitintutorsadd'] = '添加 Turnitin 輔導教師 ';
$string['turnitintutorsallenrolled'] = '所有的輔導教師已註冊在 Turnitin';
$string['turnitintutors_desc'] = '以下選擇的輔導教師已註冊至此 Turnitin 課程為輔導教師。已註冊的輔導教師可以登錄至 Turnitin 網站以進入此課程。';
$string['duplicatesfound'] = '找到同樣 Turnitin 作業的重複檔案。當一個或多個 Moodle Direct 作業藉由 Turnitin API 連至同一個 Turnitin 作業時就會發生重複。這往往會造成問題，其中最常見的是，提交至其中一個收件匣的物件會出現在另一個收件匣。欲處理這類問題，您應該刪除重複作業或重新設定有重複作業出現的課程。<br /><br />我們找到以下的重複:';
$string['erater'] = '開啟 e-rater 文法檢查';
$string['erater_handbook'] = 'ETS&copy 手冊';
$string['erater_dictionary'] = 'e-rater 字典';
$string['erater_categories'] = 'e-rater 類型';
$string['erater_spelling'] = '拼字';
$string['erater_grammar'] = '文法';
$string['erater_usage'] = '用法';
$string['erater_mechanics'] = '技巧';
$string['erater_style'] = '風格';
$string['erater_handbook_advanced'] = '進階';
$string['erater_handbook_highschool'] = '高中';
$string['erater_handbook_middleschool'] = '中學';
$string['erater_handbook_elementary'] = '小學';
$string['erater_handbook_learners'] = '英文學習者';
$string['erater_dictionary_enus'] = '美式英文字典';
$string['erater_dictionary_engb'] = '英式英文字典';
$string['erater_dictionary_en'] = '美式及英式英文字典';
$string['turnitinuseerater'] = '開啟 ETS&copy;';
$string['turnitinuseerater_desc'] = '選擇是否開啟 ETS&copy; 文法檢查。<br /><i>(唯有在ETS&copy; e-rater 在您的Turnitin帳戶開啟的情況下才能開啟此選項)</i>';
$string['student_read'] = '學生檢視文稿於：';
$string['student_notread'] = '學生尚未檢視此文稿。';
$string['relinkusers'] = '重新鏈接用戶';
$string['unlinkrelinkusers'] = '解除鏈接/重新鏈接 Turnitin 用戶';
$string['usersunlinkrelink'] = '解除鏈接/重新鏈接之用戶';
$string['turnitinid'] = 'Turnitin 代碼';
$string['turnitinsubmissionid'] = '預設設置';
$string['defaults_desc'] = '以下的設置將是用在新的 Moodle Direct Turnitin 作業 2 的實例上的預設設置';
$string['upgradeavailable'] = '有新的更新程式';
$string['coursemodidincorrect'] = '課程單元代碼不正確';
$string['coursemisconfigured'] = '課程安裝錯誤';
$string['coursemodincorrect'] = '課程單元不正確';
$string['no'] = '非';
$string['yes'] = '是';
$string['migrationassignmentcreated'] = '遷移作業已建立 - 代碼: {$a}';
$string['migrationassignmentpartcreated'] = '遷移作業部分已建立 - 代碼: {$a}';
$string['migrationassignmentcreationerror'] = '無法建立遷移作業 - 課程: {$a}';
$string['migrationassignmenterror1'] = '無法添加新課程單元至課程 {$a}';
$string['migrationassignmenterror2'] = '無法添加新課程單元至該組 - 課程 {$a}';
$string['migrationassignmenterror3'] = '無法為遷移作業建立活動 - 課程 {$a}';
$string['migrationcoursecreateerror'] = '課程 {$a} 無法在 Moodle 上建立';
$string['migrationcoursecreatederror'] = '課程 {$a} 被重新建立，但在儲存鏈接時有誤';
$string['migrationcoursecreated'] = 'Turnitin 內的課程在 Moodle 上重新建立';
$string['migrationcoursegeterror'] = '無法取得 Turnitin 內的任何課程';
$string['migrationassignmentgeterror'] = '無法取得 Turnitin 內的任何作業';
$string['getassignmenterror'] = '無法遷移 Turnitin 內的任何作業';
$string['checkupdateavailableerror'] = '無法為 Moodle Direct 查詢版本更新';
$string['maxmarkserror'] = '最高分數必須在 0 和 100 之間';
$string['nosubmissiondataavailable'] = '無其它提交物件數據';
$string['nointegration'] = '無整合';
$string['testingconnection'] = '測試連接至 Turnitin ';
$string['integration'] = '整合';
$string['id'] = '代碼';
$string['course'] = '課程';
$string['selectcoursecategory'] = '選擇課程類型';
$string['module'] = '單元';
$string['source'] = '來源';
$string['similarity'] = '相似度';
$string['moodlelinked'] = '與 Moodle 鏈接';
$string['coursegettiierror'] = '無法從 Turnitin 獲取課程數據';
$string['savecourseenddateerror'] = '在嘗試在 Turnitin 內儲存新的課程結束日期時有誤';
$string['savecourseenddate'] = '儲存新的課程結束日期';
$string['newcourseenddate'] = '新的課程結束日期';
$string['newenddatedesc'] = '為以下的課程選擇新的結束日期，然後之後它會在 Turnitin 內更新。';
$string['close'] = '關閉';
$string['errors'] = '有誤';
$string['setinstructordefaults'] = '設定這些值為作業預設值';
$string['setinstructordefaults_help'] = '這些設定將會被用在任何您新建立的 Moodle Direct Turnitin 作業上。它們將取代您的系統管理員制定的預設值並將僅為您專用。';
$string['messagesinbox'] = 'Turnitin 信息收件匣';
$string['downloadgrademarkzip'] = '下載選擇的 GradeMark 檔案';
$string['downloadorigfileszip'] = '下載原始檔案';
$string['uploadingsubtoturnitin'] = '上傳您的提交物件至 Turnitin';
$string['emptycreatedfile'] = '您所嘗試提交的文檔為空白或訛誤';
$string['studentdataprivacy'] = '學生數據隱私設定';
$string['studentdataprivacy_desc'] = '以下設定可以調整以確保學生 的個人數據不會藉由 API 傳送至 Turnitin。 ';
$string['enablepseudo'] = '開啟學生隱私';
$string['enablepseudo_desc'] = '若選擇此選項，學生電子郵件地址將被轉變為擬似 Turnitin IP 的判定。.<br /><i>(<b>注意:</b> 若任何 Moodle 用戶資料已經與 Turnitin 同步，此選項不能更改)</i>';
$string['pseudofirstname'] = '學生的假名';
$string['pseudofirstname_desc'] = '<b>[選擇性的]</b><br />學生名字在 Turnitin 文件檢視器內顯示';
$string['pseudolastname'] = '學生的假姓';
$string['pseudolastname_desc'] = '學生的姓在Turnitin 文件檢視器內顯示';
$string['pseudolastnamegen'] = '自動產生姓氏';
$string['pseudolastnamegen_desc'] = '若設置為‘是’和熱假姓設為用戶簡介檔案內的一欄，那麼該欄被自動的獨特識別代號填空。';
$string['pseudoemailsalt'] = '擬似加密鹽';
$string['pseudoemailsalt_desc'] = '<b>[選擇性的]</b><br />一個選擇性的鹽以添增產生的假的學生電子郵件地址的複雜性。<br />(<b>注意:</b> 鹽應該維持不變以保持一致的假的電子郵件地址)';
$string['pseudoemaildomain'] = '假的電子郵件網域';
$string['pseudoemaildomain_desc'] = '<b>[選擇性的]</b><br />一個選擇性的假的電子郵件地址的網域。(若空白的話，將預設為 @tiimoodle.com)';
$string['pseudoemailaddress'] = '假的電子郵件地址';
$string['instructor'] = '指導教師';
$string['files'] = '文檔';
$string['filedeleteconfirm'] = '您確定您要刪除此文檔嗎？此動作將不能取消。';
$string['filebrowser'] = 'Moodle Direct 文檔檢視器';
$string['deletable'] = '可刪除的';
$string['inactive'] = '未開啟';
$string['created'] = '已建立';
$string['filename'] = '文檔名稱';
$string['user'] = '用戶';
$string['sprevious'] = '前';
$string['snext'] = '次';
$string['semptytable'] = '未搜尋到任何結果';
$string['ssearch'] = '搜尋';
$string['sprocessing'] = '上傳來自 Turnitin 的數據中...';
$string['szerorecords'] = '無法顯示任何記錄。';
$string['unlinkedusers'] = '未連接用戶';
$string['modulename_help'] = '建立一個 Turnitin Moodle Direct 作業，以連接 Moodle 內的活動至 Turnitin 上的作業。一旦連接，活動允許指導教師使用在 Turnitin 文件檢視器內有的評估工具來評估並提供反饋給學生的作品。';
$string['transmatch'] = '已翻譯相符功能';
$string['transmatch_desc'] = '決定是否已翻譯相符功能將會在作業設置視窗內成為可用的設置。<br /><i>(僅有當已翻譯相符功能在您的 Turnitin 賬戶內開啟後才能開啟此選項)</i>';
$string['turnitintooltwo:addinstance'] = '添加 Turnitin 工具活動';
$string['copyrightagreementerror'] = '在提交前，請勾選空格以標明您接受同意書。';
$string['updatepart'] = '更新部分';
$string['grademark'] = 'GradeMark';
$string['launchgrademark'] = 'GradeMark';
$string['submissiondeleted'] = '提交物件已刪除';
$string['tutoradded'] = '輔導教師已添加至 Turnitin 內的課程';
$string['tutoraddingerror'] = '添加輔導教師至 Turnitin 內的課程時出現問題';
$string['tutorremoved'] = '輔導教師已從 Turnitin 內的課程中移除';
$string['tutorremovingerror'] = '移除輔導教師至 Turnitin 內的課程時出現問題';
$string['noturnitinassignemnts'] = '尚無 Turnitin 作業';
$string['notutors'] = '尚無輔導教師加入 Turnitin 內的此課程';
$string['settings'] = '設定';
$string['faultcode'] = '錯誤代號';
$string['line'] = '列';
$string['message'] = '信息';
$string['code'] = '代號';
$string['userfinderror'] = '嘗試在 Turnitin 內找尋用戶時有誤';
$string['userjoinerror'] = '嘗試在 Turnitin 內添加用戶至課程時有誤';
$string['userremoveerror'] = '嘗試在 Turnitin 內移除用戶時有誤';
$string['membercheckerror'] = '嘗試檢查註冊在此課程內的用戶時有誤';
$string['tiiusergeterror'] = '嘗試從 Turnitin 內獲取用戶細節時有誤';
$string['createassignmenterror'] = '嘗試在 Turnitin 內建立作業時有誤';
$string['editassignmenterror'] = '嘗試在 Turnitin 內編輯作業時有誤';
$string['deleteassignmenterror'] = '嘗試在 Turnitin 內刪除作業時有誤';
$string['createsubmissionerror'] = '嘗試在 Turnitin 內建立提交物件時有誤';
$string['updatesubmissionerror'] = '嘗試重新提交您的提交物件至 Turnitin 時有誤';
$string['tiisubmissiongeterror'] = '嘗試從 Turnitin 內獲取提交物件時有誤';
$string['tiisubmissionsgeterror'] = '嘗試從 Turnitin 內獲取此作業的提交物件時有誤';
$string['enrolling'] = '註冊學生至 Turnitin';
$string['tiiassignmentgeterror'] = '嘗試從 Turnitin 內獲取作業時有誤';
$string['turnitinstudents'] = 'Turnitin 學生';
$string['turnitinstudentsremove'] = '您確定您想要從 Turnitin 內的課程中移除此學生嗎？';
$string['studentremoved'] = '學生已從 Turnitin 內的課程中移除';
$string['studentremovingerror'] = '從 Turnitin 內的課程中移除學生時出現問題';
$string['turnitinstudents_desc'] = '以下被選擇的用戶已註冊至此 Turnitin 課程。註冊學生可藉由登錄 Turnitin 網頁授權進入此課程。';
$string['coursebrowser'] = 'Turnitin 課程遷移';
$string['coursebrowserdesc'] = '您可以搜查 Turnitin 內的課程以在 Moodle 上重新建立以下的課程';
$string['courseexistsmoodle'] = '此課程目前在 Moodle 內顯示為：';
$string['coursetitle'] = '課程標題';
$string['coursetitleerror'] = '您必須提供課程標題以供搜查';
$string['createmoodlecourses'] = '重新建立課程';
$string['createmoodleassignments'] = '重新建立選擇課程的所有作業在 Moodle 內嗎？';
$string['recreatemulticlasses'] = '您所選擇的課程目前被重新建立中。根據您所選擇的課程數，這有可能會花幾分鐘。';
$string['recreatemulticlassescomplete'] = '課程重新建立目前已完成。{$a->total} 分之 {$a->completed} 已成功地建立。';
$string['createcourse'] = '建立新的 Moodle 課程';
$string['linkcourse'] = '鏈接課程至現存的 Moodle 課程';
$string['selectcourse'] = '選擇 Moodle 課程';
$string['defaultcoursetiititle'] = 'Turnitin 內的課程';
$string['or'] = '或';
$string['downloadassignment'] = '下載作業至 Moodle';
$string['assignmenttitle'] = '新作業標題';
$string['defaultassignmenttiititle'] = 'Turnitin 內的作業';
$string['revealdesc'] = '請在下方留下顯示學生姓名的原因。';
$string['noreason'] = '沒有特定的原因';
$string['unanonymiseerror'] = '當嘗試顯示學生姓名時出現錯誤';
$string['digitalreceipt'] = '電子回條';
$string['viewdigitalreceipt'] = '檢視電子回條';
$string['noscript'] = 'Turnitin 需要 Javascript 但是您的瀏覽器並未開啟它。請在您的瀏覽器內開啟 Javascript 以使您能利用 Turnitin 的所有功能。';
$string['noscriptsummary'] = 'Turnitin 需要 Javascript 但是您的瀏覽器並未開啟它。若未開啟的話，您將無法進入 Turnitin。';
$string['noscriptula'] = '(因為您沒有開啟 javascript，在接受 Turnitin 用戶同意書後，您將需要在提交物件時手動更新此頁面)';
$string['showsummary'] = '顯示作業摘要';
$string['hidesummary'] = '隱藏作業摘要';
$string['marksavailable'] = '標示可使用';
$string['deletepart'] = '刪除部分';
$string['partdeleted'] = '作業部分已被刪除';
$string['turnitin'] = 'Turnitin';
$string['coursebrowserassignmentdesc'] = '在下列的表格，您可以選擇最多 5 個作業以在 Moodle內建立複製 Turnitin 作業的部分。';
$string['turnitinoroptions'] = '原創性報告選項';
$string['turnitingmoptions'] = 'GradeMark 選項';
$string['attachrubric'] = '依附評分表至此作業';
$string['norubric'] = '無評分表';
$string['otherrubric'] = '使用屬於其他指導教師的評分表';
$string['attachrubricnote'] = '注意：學生將可以在提交前檢視依附的評分表和它們的內容。';
$string['changerubricwarning'] = '變更或分離評分表將從此作業內的文稿中移除所有現存評分表計分，包括之前標示的計分卡。之前評分過的文稿之總體成績將保留。';
$string['launchrubricmanager'] = '開動評分表管理工具';
$string['launchrubricview'] = '檢視標示用的評分表';
$string['launchrubricviewshort'] = '標示評分表';
$string['launchquickmarkmanager'] = '開動 Quickmark 管理工具';
$string['launchpeermarkmanager'] = '開動 Peermark 管理工具';
$string['launchpeermarkreviews'] = '開動 Peermark 評鑑';
$string['peermark'] = 'PeerMark ';
$string['peermarkassignments'] = 'PeerMark 作業';
$string['showpeermark'] = '顯示 PeerMark 作業';
$string['hidepeermark'] = '隱藏 PeerMark 作業';
$string['noofreviewsrequired'] = '必要評鑑總數';
$string['showpeermarkinstructions'] = '顯示 PeerMark 指示';
$string['hidepeermarkinstructions'] = '隱藏 PeerMark 指示';
$string['turnitinenablepeermark'] = '開啟 PeerMark 作業';
$string['turnitinenablepeermark_desc'] = '選擇是否允許建立 Peermark 作業。<br/><i>(唯為他們的帳戶安裝 Peermark 的用戶才有此選項)</i>';
$string['nonenrolledstudent'] = '非註冊學生';
$string['startdatenotyearago'] = '開始日期不能過於 1年前';
$string['searchcourses'] = '搜尋課程';
$string['errorsdesc'] = '嘗試上傳以下文檔至 Turnitin 時出現問題。';
$string['tiiexplain'] = 'Turnitin 為商務產品。您必須付訂購費才能使用此服務。欲獲得更多資訊，請看 <a href=http://docs.moodle.org/en/Turnitin_administration>http://docs.moodle.org/en/Turnitin_administration</a>';
$string['useturnitin'] = '開啟 Turnitin';
$string['turnitinconfig'] = 'Turnitin 剽竊 Plugin 安裝';
$string['studentdisclosuredefault'] = '所有被上傳的文檔將被提交至剽竊偵查服務 Turnitin.com';
$string['studentdisclosure'] = '學生透露';
$string['studentdisclosure_help'] = '此內文將會顯示在文檔上傳頁面給所有學生。';
$string['settingsinserterror'] = '當嘗試插入設置至數據庫時有誤';
$string['settingsupdateerror'] = '嘗試更新數據庫設置時有誤';
$string['config'] = '安裝';
$string['configupdated'] = '安裝更新';
$string['turnitindefaults'] = 'Turnitin 剽竊 Plugin 預設設定';
$string['turnitinpluginsettings'] = 'Turnitin 剽竊 Plugin 設定';
$string['defaultsdesc'] = '以下設置為在活動單元內開啟 Turnitin時的預設組 ';
$string['compareinstitution'] = '比較提交文檔和在此機構內提交的文稿';
$string['defaultinserterror'] = '嘗試插入預設設置值於數據庫時有誤';
$string['defaultupdateerror'] = '嘗試更新數據庫內預設設置時有誤';
$string['defaultupdated'] = 'Turnitin 預設值更新';
$string['pp_createsubmissionerror'] = '剽竊 plugin 在建立提交物件時有誤';
$string['pp_updatesubmissionerror'] = '剽竊 plugin 在更新提交物件時有誤';
$string['pp_submission_error'] = '您的提交物件有誤';
$string['pp_configuredesc'] = '您必須在turnitintooltwo單元內安裝此單元。請點選 <a href={$a}/admin/settings.php?section=modsettingturnitintooltwo>here</a> 以安裝此 plugin';
$string['coursestomigrate'] = '您在 Turnitiin 內有 {$a} 課程可以遷移';
$string['migrationheader'] = 'Turnitin 課程遷移';
$string['gradingtemplate'] = '評分模板';
$string['allownonor'] = '允許任何檔案類型的提交物件？';
$string['allownonor_help'] = '此設定將允許提交任何檔案類型。若此選項設為“是”，在可行的前提下，提交物件將會被檢查其原創性，提交物件將可被下載而 GradeMark 反饋工具將可被使用。';
$string['submitnothing'] = '在無提交物件的前提下為此學生開啟評分功能';
$string['submitnothingwarning'] = '為尚未提交檔案的學生點選在灰筆將建立一個評分模板，允許您給學生 GradeMark 的作業反饋。評分模板取代提交物件並將阻止學生提交至不允許提交物件的作業。.<br><br> 您確定您要在無提交物件的前提下評分嗎？ ';
$string['draftsubmit'] = '檔案將提交至 Turnitin 內的何處？';
$string['submitondraft'] = '在上傳時提交文檔';
$string['submitonfinal'] = '當學生傳寄至標示時提交檔案';
$string['turnitindiagnostic'] = '開啟診斷模式';
$string['turnitindiagnostic_desc'] = '<b>[警告]</b><br />開啟診斷模式來追踪 Turnitin API 的問題。 ';
$string['autorefreshgrades'] = '自動更新成績/分數';
$string['autorefreshgrades_help'] = '按預設設定，在每次啟用 Turnitin 後，Moodle 整合 plug in 將嘗試自動拉下在 Turnitin 内所做的變更。 您可以使用此選項以關閉該功能，但若要維持這兩個系統間的一致性，您將需要時常地從 Moodle 内手動更新成績和原創性分數。 ';
$string['yesgrades'] = '確定，自動更新原創性分數與成績';
$string['nogrades'] = '否，我將以手動方式更新原創性分數及成績';
$string['submissionagreementerror'] = '您必須同意做此提交';
$string['noxmlwriterlibrary'] = '欲使用此插入程式，您將需要在您的伺服器上安裝 PHP XMLWriter 延伸軟體。';
$string['checkupgrade'] = '檢查可用的升級';
$string['checkingupgrade'] = '檢查可用的升級中';
$string['usinglatest'] = '您在使用最新的版本！';
$string['useturnitin_mod'] = '爲 {$a} 開啓 Turnitin';
$string['errorcode1'] = '這個檔案尚無足夠的内容給 Turnitin 製作原創性報告。';
$string['errorcode2'] = '這個檔案將不會被提交至 Turnitin 因爲它超過允許的檔案大小的上限 {$a} ';
$string['notorcapable'] = '不可能爲此檔案製作原創性報告。';
$string['pastfiveattempts'] = '這個檔案將不會被提交至 Turnitin 因爲它超過允許的5個嘗試的上限。';
$string['errorcode3'] = '這個檔案尚未被提交至 Turnitin 因爲用戶尚未接收 Turnitin 終端用戶的權限合約。';
$string['ppsubmissionerrorseelogs'] = '這個檔案尚未被提交至 Turnitin, 請參考您的 API 登記來查詢更多資訊';
$string['ppsubmissionerrorstudent'] = '這個檔案尚未被提交至 Turnitin, 請問您的導師登記來查詢更多資訊';
$string['turnitinppula'] = '重要: 您必須接受 Turnitin 終端用戶的權限合約。請點選此鏈接以接受。';
$string['redirecttoeula'] = '我們正在導引您至終端用戶權限合約';
$string['filedoesnotexist'] = '檔案已被刪除';
$string['errorenrollingall'] = '加入所有學生至 Turnitin 時有誤 -請參考您的 API 登記來查詢更多資訊';
$string['eventremoved'] = '這個活動已從 cron queue 被刪除，也不會再被處理。';
$string['partnametoolarge'] = '部分名稱太大。請限制至 40 個字符。';
$string['enableperformancelogs'] = '開啓網路成效記錄';
$string['enableperformancelogs_desc'] = '若開啓, 每個給 Turnitin 伺服器的請求將會被記錄在 {tempdir}/turnitintooltwo/logs';
$string['pp_assignmentcreateerror'] = '這個模組無法在 Turnitin 上建立, 請參考您的 API 登記來查詢更多資訊';
$string['pp_assignmentediterror'] = '這個模組無法在 Turnitin 上建立, 請參考您的 API 登記來查詢更多資訊';
$string['pp_classcreationerror'] = '這個課程無法在 Turnitin 上建立, 請參考您的 API 登記來查詢更多資訊';
$string['pp_assignmentsubmiterror'] = '在 Turnitin 内複製您的模組時有問題，導致無法提交, 請參考您的 API 登記來查詢更多資訊';
$string['listsubmissions'] = '列舉提交物件';
$string['viewsubmission'] = '檢視提交物件';
$string['listsubmissionsdesc'] = '用戶已檢視課程提交物件列表';
$string['viewsubmissiondesc'] = '用戶已檢視提交物件';
$string['addsubmissiondesc'] = '用戶已添加提交物件';
$string['deletesubmissiondesc'] = '用戶已刪除提交物件';
$string['turnitinrepositoryoptions'] = '文稿儲存庫作業';
$string['turnitinrepositoryoptions_desc'] = '選擇 Turnitin 作業的儲存庫選項。<br /><i>(只有已為他們賬戶開啟機構儲存庫的人才能使用)</i>';
$string['turnitinrepositoryoptions_help'] = '使用在作業設置銀幕的這個設置來變更可使用的儲存庫選項。<br /><i>(只有已為他們賬戶開啟機構儲存庫的人才能使用)</i>';
$string['repositoryoptions_0'] = '開啟指導教師的標準儲存庫選項';
$string['repositoryoptions_1'] = '開啟指導教師的擴張儲存庫選項';
$string['repositoryoptions_2'] = '提交所有文稿至標準儲存庫';
$string['repositoryoptions_3'] = '不要提交任何文稿至儲存庫';
$string['turnitinula_btn'] = '請點選這裡以讀取並接受同意書。';
$string['turnitinula'] = '在提交物件之前，您必須接受最新的 Turnitin 用戶同意書。';
$string['upgradenotavailable'] = '無可用的更新';
$string['turnitintoolofflineerror'] = '我們面臨暫時的狀況。請稍後再試。';
$string['offlinestatus'] = 'Turnitin 已被設為離線。 (變數 $CFG->tiioffline 已被設為真實。)';
$string['disableanonconfirm'] = '這樣做將會永遠的關閉在此作業上做匿名標示。您確定嗎？';
$string['uniquepartname'] = '部分名稱必須獨特';
$string['closebutton'] = '關閉';
$string['reportgenspeed_help'] = '對此作業設定總共有3個選項: &#39;即刻產生報告 (不允許重新提交)&#39;, &#39;即刻產生報告 (在截止日期前允許重新提交)&#39;, 和 &#39;在截止日期當天產生報告 (在截止日期前允許重新提交)&#39;<br /><br />&#39;即刻產生報告 (不允許重新提交)&#39;這個選項在學生提交物件時馬上產生原創性報告。當選擇這個選項是，學生將無法重新提交至作業。<br /><br />若要允許重新提交, 選擇 &#39;即刻產生報告 (在截止日期前允許重新提交)&#39;選項。這允許學生在截止日期前持續重新提交文稿至作業。 處理重新提交物件的原創性報告可能會花費最多 24 個小時的時間。<br /><br />&#39;在截止日期當天產生報告 (在截止日期前允許重新提交)&#39;這個選項將只有在作業的截止日期當天才為產生原創性報告。當準備原創性報告時，此設定將會互相比較所有提交至作業的文稿。';
$string['submissiondate'] = '提交日期';
$string['receiptassignmenttitle'] = '作業標題';
$string['refid'] = '參照代號';
$string['turnitinpaperid'] = 'Turnitin 文稿代號';
$string['submissionauthor'] = '提交物件作者';
$string['receiptparagraph'] = '此回條證實 Turnitin 已收到您的文稿。您可以在下方找到有關您的提交物件的回條資訊。';
$string['objectid'] = 'Turnitin 文稿代號';
$string['ppanonmarkingnote'] = '注意： 匿名標示僅適用於 Turnitin GradeMark。它是被在 Turnitin 內的公佈日期所控制。 Turnitin 將會使用“隱藏至”日期為公佈日期（這可以用在課程評分簿報告內編輯分數項目的功能來設定）';
$string['anonalert'] = '您的公佈日期在您現在時間之前。若您儲存的話，這將會永遠的關閉在此作業上做匿名標示。';
$string['turnitinapiurl_desc'] = '<b>[Required]</b><br />選擇一個 Turnitin API URL';
$string['tii_submission_failure'] = '請諮詢您的輔導或 Moodle 管理員以獲得跟多資訊';
$string['turnitinrefreshingsubmissions'] = '更新提交物件中';
