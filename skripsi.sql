USE [master]
GO
/****** Object:  Database [skripsi]    Script Date: 3/20/2022 9:05:30 AM ******/
CREATE DATABASE [skripsi]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'skripsi', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL15.MSSQLSERVER\MSSQL\DATA\skripsi.mdf' , SIZE = 8192KB , MAXSIZE = UNLIMITED, FILEGROWTH = 65536KB )
 LOG ON 
( NAME = N'skripsi_log', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL15.MSSQLSERVER\MSSQL\DATA\skripsi_log.ldf' , SIZE = 8192KB , MAXSIZE = 2048GB , FILEGROWTH = 65536KB )
 WITH CATALOG_COLLATION = DATABASE_DEFAULT
GO
ALTER DATABASE [skripsi] SET COMPATIBILITY_LEVEL = 150
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [skripsi].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [skripsi] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [skripsi] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [skripsi] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [skripsi] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [skripsi] SET ARITHABORT OFF 
GO
ALTER DATABASE [skripsi] SET AUTO_CLOSE OFF 
GO
ALTER DATABASE [skripsi] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [skripsi] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [skripsi] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [skripsi] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [skripsi] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [skripsi] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [skripsi] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [skripsi] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [skripsi] SET  DISABLE_BROKER 
GO
ALTER DATABASE [skripsi] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [skripsi] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [skripsi] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [skripsi] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [skripsi] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [skripsi] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [skripsi] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [skripsi] SET RECOVERY FULL 
GO
ALTER DATABASE [skripsi] SET  MULTI_USER 
GO
ALTER DATABASE [skripsi] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [skripsi] SET DB_CHAINING OFF 
GO
ALTER DATABASE [skripsi] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [skripsi] SET TARGET_RECOVERY_TIME = 60 SECONDS 
GO
ALTER DATABASE [skripsi] SET DELAYED_DURABILITY = DISABLED 
GO
ALTER DATABASE [skripsi] SET ACCELERATED_DATABASE_RECOVERY = OFF  
GO
EXEC sys.sp_db_vardecimal_storage_format N'skripsi', N'ON'
GO
ALTER DATABASE [skripsi] SET QUERY_STORE = OFF
GO
USE [skripsi]
GO
/****** Object:  Table [dbo].[agama]    Script Date: 3/20/2022 9:05:30 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[agama](
	[id_agama] [int] NOT NULL,
	[agama] [varchar](25) NOT NULL,
 CONSTRAINT [PK_agama] PRIMARY KEY CLUSTERED 
(
	[id_agama] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[golongan]    Script Date: 3/20/2022 9:05:30 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[golongan](
	[id_golongan] [int] NOT NULL,
	[golongan] [varchar](25) NOT NULL,
 CONSTRAINT [PK_golongan] PRIMARY KEY CLUSTERED 
(
	[id_golongan] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[instansi]    Script Date: 3/20/2022 9:05:30 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[instansi](
	[id_instansi] [int] NOT NULL,
	[nama_instansi] [varchar](50) NOT NULL,
	[alamat_instansi] [varchar](150) NULL,
	[notelp_instansi] [varchar](14) NULL,
	[email_instansi] [varchar](50) NULL,
 CONSTRAINT [PK_instansi] PRIMARY KEY CLUSTERED 
(
	[id_instansi] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[pegawai]    Script Date: 3/20/2022 9:05:30 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[pegawai](
	[nip_bps] [char](9) NOT NULL,
	[nip] [char](20) NULL,
	[nama] [varchar](50) NOT NULL,
	[jenis_kelamin] [char](2) NOT NULL,
	[tempat_lahir] [varchar](100) NULL,
	[tanggal_lahir] [char](10) NOT NULL,
	[no_telepon] [varchar](14) NULL,
	[no_handphone] [varchar](14) NULL,
	[email] [varchar](50) NULL,
	[alamat] [varchar](150) NULL,
	[perkiraan_pensiun] [char](4) NULL,
	[jabatan_terakhir] [varchar](100) NULL,
	[id_status_pegawai] [int] NOT NULL,
	[id_instansi] [int] NOT NULL,
	[id_status_perkawinan] [int] NOT NULL,
	[id_agama] [int] NOT NULL,
	[id_golongan] [int] NOT NULL,
 CONSTRAINT [PK_pegawai] PRIMARY KEY CLUSTERED 
(
	[nip_bps] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[pegawai_pendidikan]    Script Date: 3/20/2022 9:05:30 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[pegawai_pendidikan](
	[nip_bps] [char](9) NOT NULL,
	[id_pendidikan] [int] NOT NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[pendidikan]    Script Date: 3/20/2022 9:05:30 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[pendidikan](
	[id_pendidikan] [int] NOT NULL,
	[nama_prodi_jurusan] [varchar](100) NOT NULL,
	[nama_instansi_pendidikan] [varchar](50) NULL,
	[tahun_lulus] [char](4) NULL,
 CONSTRAINT [PK_pendidikan] PRIMARY KEY CLUSTERED 
(
	[id_pendidikan] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[status_pegawai]    Script Date: 3/20/2022 9:05:30 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[status_pegawai](
	[id_status_pegawai] [int] NOT NULL,
	[status_pegawai] [varchar](25) NOT NULL,
 CONSTRAINT [PK_status_pegawai] PRIMARY KEY CLUSTERED 
(
	[id_status_pegawai] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[status_perkawinan]    Script Date: 3/20/2022 9:05:30 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[status_perkawinan](
	[id_status_perkawinan] [int] NOT NULL,
	[status_perkawinan] [varchar](25) NOT NULL,
 CONSTRAINT [PK_status_perkawinan] PRIMARY KEY CLUSTERED 
(
	[id_status_perkawinan] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
ALTER TABLE [dbo].[pegawai]  WITH CHECK ADD  CONSTRAINT [FK_pegawai_agama] FOREIGN KEY([id_agama])
REFERENCES [dbo].[agama] ([id_agama])
GO
ALTER TABLE [dbo].[pegawai] CHECK CONSTRAINT [FK_pegawai_agama]
GO
ALTER TABLE [dbo].[pegawai]  WITH CHECK ADD  CONSTRAINT [FK_pegawai_golongan] FOREIGN KEY([id_golongan])
REFERENCES [dbo].[golongan] ([id_golongan])
GO
ALTER TABLE [dbo].[pegawai] CHECK CONSTRAINT [FK_pegawai_golongan]
GO
ALTER TABLE [dbo].[pegawai]  WITH CHECK ADD  CONSTRAINT [FK_pegawai_instansi] FOREIGN KEY([id_instansi])
REFERENCES [dbo].[instansi] ([id_instansi])
GO
ALTER TABLE [dbo].[pegawai] CHECK CONSTRAINT [FK_pegawai_instansi]
GO
ALTER TABLE [dbo].[pegawai]  WITH CHECK ADD  CONSTRAINT [FK_pegawai_status_pegawai] FOREIGN KEY([id_status_pegawai])
REFERENCES [dbo].[status_pegawai] ([id_status_pegawai])
GO
ALTER TABLE [dbo].[pegawai] CHECK CONSTRAINT [FK_pegawai_status_pegawai]
GO
ALTER TABLE [dbo].[pegawai]  WITH CHECK ADD  CONSTRAINT [FK_pegawai_status_perkawinan] FOREIGN KEY([id_status_perkawinan])
REFERENCES [dbo].[status_perkawinan] ([id_status_perkawinan])
GO
ALTER TABLE [dbo].[pegawai] CHECK CONSTRAINT [FK_pegawai_status_perkawinan]
GO
ALTER TABLE [dbo].[pegawai_pendidikan]  WITH CHECK ADD  CONSTRAINT [FK_pegawai_pendidikan_pegawai] FOREIGN KEY([nip_bps])
REFERENCES [dbo].[pegawai] ([nip_bps])
GO
ALTER TABLE [dbo].[pegawai_pendidikan] CHECK CONSTRAINT [FK_pegawai_pendidikan_pegawai]
GO
ALTER TABLE [dbo].[pegawai_pendidikan]  WITH CHECK ADD  CONSTRAINT [FK_pegawai_pendidikan_pendidikan] FOREIGN KEY([id_pendidikan])
REFERENCES [dbo].[pendidikan] ([id_pendidikan])
GO
ALTER TABLE [dbo].[pegawai_pendidikan] CHECK CONSTRAINT [FK_pegawai_pendidikan_pendidikan]
GO
USE [master]
GO
ALTER DATABASE [skripsi] SET  READ_WRITE 
GO
