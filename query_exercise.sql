SELECT doc_send.* FROM document_send AS doc_send

INNER JOIN document_out AS doc_out ON doc_send.doc_out_id = doc_out.document_out_idcard
INNER JOIN 

(
    
SELECT document_in_idcard AS idcard, doc_name, doc_number, doc_date, status FROM document_in_within 
UNION
SELECT document_in_idcard AS idcard, doc_name, doc_number, doc_date, status FROM document_in_external
UNION
SELECT document_idcard AS idcard, doc_name, doc_number, doc_date, status FROM document_officer
    
) AS doc ON doc_out.in_idcard = doc.idcard AND (doc.idcard LIKE '%%' OR doc.doc_name LIKE '%%' OR doc.doc_number LIKE '%%' OR doc.doc_date LIKE '%%') AND doc.status != 4

WHERE doc_send.status != 4
ORDER BY doc_send.date_send DESC
