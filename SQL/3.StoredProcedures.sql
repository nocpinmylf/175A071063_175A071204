use QLDiemSV;

-- thêm điểm môn: 
-- quá trình-----------------------------------------------------------
DELIMITER $$
create procedure sp_suaDiemQuaTrinh(
			in maMH smallint,
			in msv int,
			in maHK smallint,
			in magiaovien smallint,
			in quaTrinh float)
begin
	update DiemMon 
	set quaTrinh = quaTrinh
	where maMon = maMH
	and maSV = msv
	and maHocKy = maHK;
end $$
DELIMITER ;

DELIMITER $$
create procedure sp_themDiemQuaTrinh(
		in maMH smallint,
		in msv int,
		in maHK smallint,
		in magiaovien smallint,
		in quaTrinh float)
begin
	insert into DiemMon(maMon, maSV, maHocKy, maGV, quaTrinh)
	values(maMH, msv, maHK, magiaovien, quaTrinh);
end $$
DELIMITER ;

-- Điểm thi-----------------------------------------------------------
DELIMITER $$
create procedure sp_suaDiemThi(
		in maMH smallint,
		in msv int,
		in maHK smallint,
		in magiaovien smallint,
		in dThi float)
begin
	update DiemMon
	set thi = dThi
	where maMon = maMH
	and maSV = msv
	and maHocKy = maHK;
end $$
DELIMITER ;

DELIMITER $$
create procedure sp_themDiemThi(
		in maMH smallint,
		in msv int,
		in maHK smallint,
		in magiaovien smallint,
		in dThi float)
begin
	insert into DiemMon(maMon, maSV, maHocKy, maGV, )
	values(maMH, msv, maHK, magiaovien, dThi);
end $$
DELIMITER ;

-- Ghi chú ----------------------------------------------------------
DELIMITER $$
create procedure sp_suaGhiChu(
		in maMH smallint,
		in msv int,
		in maHK smallint,
		in magiaovien smallint,
		in note varchar(20))
begin
	update DiemMon
	set ghiChu = note
	where maMon = maMH
	and maSV = msv
	and maHocKy = maHK;
end $$
DELIMITER ;

-- xoá điểm môn -------------------------------------------------------
DELIMITER **
create procedure sp_xoaDiemMon(
		in maMH smallint,
		in msv int,
		in maHK smallint)
begin
	delete from DiemMon
    where maMon = @maMH
    and	maSV = @msv
    and maHocKy = @maHK;
end **
DELIMITER ;

-- đổi mật khẩu --------------------------------------------------------
-- đổi trạng thái kích hoạt mail ---------------------------------------