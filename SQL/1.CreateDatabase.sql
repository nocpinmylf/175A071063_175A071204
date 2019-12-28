Create database QLDiemSV;
use QLDiemSV;

create table Khoa(
	maKhoa tinyint primary key AUTO_INCREMENT,
    tenKhoa varchar(50) unique not null
);

create table Lop(
	maLop smallint primary key AUTO_INCREMENT,
    tenlop varchar(10) unique not null,
    maKhoa tinyint,
    foreign key (maKhoa) references Khoa(maKhoa) on delete set null
);

create table MonHoc(
	maMon smallint primary key AUTO_INCREMENT,
    tenMon varchar(100) unique not null,
    maKhoa tinyint,
    soTinChi tinyint not null,
    foreign key (maKhoa) references Khoa(maKhoa) on delete set null
);

create table HocKy(
	maHocKy smallint primary key AUTO_INCREMENT,
    tenHocKy varchar(30) unique not null,
    namHoc year not null
);

create table GiangVien(
	maGV smallint primary key AUTO_INCREMENT,
    tenGV varchar(30),
    gioiTinh bit,
    queQuan varchar(200),
    ngaySinh date,
    maKhoa tinyint,
    foreign key(maKhoa) references Khoa(maKhoa)
);

create table TaiKhoan(
    email varchar(50) primary key not null,
    maGV smallint UNIQUE,
    matKhau varchar(30) not null,
    maXacThuc char(32),
    trangThai bit default 0
);

create table GV_MH (
	maGV smallint not null,
    maMon smallint not null,
	primary key(maGV, maMon),
    foreign key(maGV) references GiangVien(maGV) on delete cascade,
    foreign key(maMon) references MonHoc(maMon) on delete cascade
);

create table SinhVien(
	maSV int primary key AUTO_INCREMENT,
    tenSV varchar(30) not null,
    maLop smallint,
    khoaHoc char(5) not null, -- khoá học vd: k59
    gioiTinh bit not null,
    queQuan varchar(200) not null,
    ngaySinh date not null,
    email varchar(50) unique not null,
    trangThai varchar(20) default N'Đang Học',
    foreign key (maLop) references Lop(maLop) on delete set null
);

create table DiemMon(
	maMon smallint not null,
    maSV int not null,
    maHocKy smallint not null,
    maGV smallint not null,
    quaTrinh float,
    thi float,
    tongKet float,
    ghiChu varchar(20) default N'Đang Học',
    primary key (maMon, maSV, maHocKy),
    foreign key (maHocKy) references HocKy(maHocKy),
    foreign key (maGV) references GiangVien(maGV),
    foreign key (maMon) references MonHoc(maMon)
);

create table DiemTrungBinh(
	maSV int not null,
    maHocKy smallint not null,
    diemTB float,
    primary key (maSV, maHocKy),
    foreign key (maSV) references SinhVien(maSV) on delete cascade
);