use QLDiemSV;

-- View điểm các môn
create view view_diemMon
as
	select DiemMon.maMon, tenMon, soTinChi, DiemMon.maSV, maHocKy, maGV, quaTrinh, thi, tongKet, ghiChu 
    from SinhVien, MonHoc, DiemMon
    where MonHoc.maMon = DiemMon.maMon
		and SinhVien.maSV = DiemMon.maSV;

-- View điểm trung bình
create view view_diemTB
as
	select maSV, DiemTrungBinh.maHocKy, tenHocKy, namHoc, DiemTB
    from DiemTrungBinh, HocKy
    where DiemTrungBinh.maHocKy = HocKy.maHocKy;
    
-- View giảng viên dạy môn học nào
create view view_GV_MH
as
	select GV_MH.maGV, tenGV, tenMon
    from GV_MH, GiangVien, MonHoc
    where GV_MH.maGV = GiangVien.maGV
		and GV_MH.maMon = MonHoc.maMon;