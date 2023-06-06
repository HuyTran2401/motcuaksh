using System;
using System.Drawing;
using System.Windows.Forms;
using System.Data;
using Stimulsoft.Controls;
using Stimulsoft.Base.Drawing;
using Stimulsoft.Report;
using Stimulsoft.Report.Dialogs;
using Stimulsoft.Report.Components;

namespace Reports
{
    public class Report : Stimulsoft.Report.StiReport
    {
        public Report()        {
            this.InitializeComponent();
        }

        #region StiReport Designer generated code - do not modify
        public Stimulsoft.Report.Components.StiPage Page1;
        public Stimulsoft.Report.Components.StiReportTitleBand ReportTitleBand1;
        public Stimulsoft.Report.Components.StiText Text19;
        public Stimulsoft.Report.Components.StiText Text20;
        public Stimulsoft.Report.Components.StiColumnHeaderBand ColumnHeaderBand1;
        public Stimulsoft.Report.Components.StiText Text1;
        public Stimulsoft.Report.Components.StiText Text2;
        public Stimulsoft.Report.Components.StiText Text3;
        public Stimulsoft.Report.Components.StiText Text4;
        public Stimulsoft.Report.Components.StiText Text5;
        public Stimulsoft.Report.Components.StiText Text6;
        public Stimulsoft.Report.Components.StiText Text7;
        public Stimulsoft.Report.Components.StiText Text8;
        public Stimulsoft.Report.Components.StiText Text9;
        public Stimulsoft.Report.Components.StiDataBand DataBand1;
        public Stimulsoft.Report.Components.StiText Text10;
        public Stimulsoft.Report.Components.StiText Text11;
        public Stimulsoft.Report.Components.StiText Text12;
        public Stimulsoft.Report.Components.StiText Text13;
        public Stimulsoft.Report.Components.StiText Text14;
        public Stimulsoft.Report.Components.StiText Text15;
        public Stimulsoft.Report.Components.StiText Text16;
        public Stimulsoft.Report.Components.StiText Text17;
        public Stimulsoft.Report.Components.StiText Text18;
        public Stimulsoft.Report.Components.StiReportSummaryBand ReportSummaryBand1;
        public Stimulsoft.Report.Components.StiText Text21;
        public Stimulsoft.Report.Components.StiText Text22;
        public Stimulsoft.Report.Components.StiText Text23;
        public p_xemdanhsach_baocaodanhgiaDataSource p_xemdanhsach_baocaodanhgia;
        
        public virtual string madonvi
        {
            get
            {
                // CheckerInfo: Value madonvi
                return "";
            }
        }
        
        public virtual string tungay
        {
            get
            {
                // CheckerInfo: Value tungay
                return "";
            }
        }
        
        public virtual string denngay
        {
            get
            {
                // CheckerInfo: Value denngay
                return "";
            }
        }
        
        public virtual string manhanvien
        {
            get
            {
                // CheckerInfo: Value manhanvien
                return "";
            }
        }
        
        public virtual string thoigianbaocao
        {
            get
            {
                // CheckerInfo: Value thoigianbaocao
                return "";
            }
        }
        
        public virtual string nhanvienin
        {
            get
            {
                // CheckerInfo: Value nhanvienin
                return "";
            }
        }
        
        public void Text19__GetValue(object sender, Stimulsoft.Report.Events.StiGetValueEventArgs e)
        {
            // CheckerInfo: Text Text19
            e.Value = ToString(sender, thoigianbaocao, true);
        }
        
        public void Text20__GetValue(object sender, Stimulsoft.Report.Events.StiGetValueEventArgs e)
        {
            // CheckerInfo: Text Text20
            e.Value = "BÁO CÁO KẾT QUẢ ĐÁNH GIÁ";
        }
        
        public void Text1__GetValue(object sender, Stimulsoft.Report.Events.StiGetValueEventArgs e)
        {
            // CheckerInfo: Text Text1
            e.Value = "STT";
        }
        
        public void Text2__GetValue(object sender, Stimulsoft.Report.Events.StiGetValueEventArgs e)
        {
            // CheckerInfo: Text Text2
            e.Value = "Họ tên cán bộ";
        }
        
        public void Text3__GetValue(object sender, Stimulsoft.Report.Events.StiGetValueEventArgs e)
        {
            // CheckerInfo: Text Text3
            e.Value = "Thời gian đánh giá";
        }
        
        public void Text4__GetValue(object sender, Stimulsoft.Report.Events.StiGetValueEventArgs e)
        {
            // CheckerInfo: Text Text4
            e.Value = "A";
        }
        
        public void Text5__GetValue(object sender, Stimulsoft.Report.Events.StiGetValueEventArgs e)
        {
            // CheckerInfo: Text Text5
            e.Value = "B";
        }
        
        public void Text6__GetValue(object sender, Stimulsoft.Report.Events.StiGetValueEventArgs e)
        {
            // CheckerInfo: Text Text6
            e.Value = "C";
        }
        
        public void Text7__GetValue(object sender, Stimulsoft.Report.Events.StiGetValueEventArgs e)
        {
            // CheckerInfo: Text Text7
            e.Value = "D";
        }
        
        public void Text8__GetValue(object sender, Stimulsoft.Report.Events.StiGetValueEventArgs e)
        {
            // CheckerInfo: Text Text8
            e.Value = "E";
        }
        
        public void Text9__GetValue(object sender, Stimulsoft.Report.Events.StiGetValueEventArgs e)
        {
            // CheckerInfo: Text Text9
            e.Value = "Nội dung đánh giá";
        }
        
        public void Text10__GetValue(object sender, Stimulsoft.Report.Events.StiGetValueEventArgs e)
        {
            // CheckerInfo: Text Text10
            e.Value = ToString(sender, Line, true);
        }
        
        public void Text11__GetValue(object sender, Stimulsoft.Report.Events.StiGetValueEventArgs e)
        {
            // CheckerInfo: Text Text11
            e.Value = ToString(sender, p_xemdanhsach_baocaodanhgia.hoten, true);
        }
        
        public void Text12__GetValue(object sender, Stimulsoft.Report.Events.StiGetValueEventArgs e)
        {
            // CheckerInfo: Text Text12
            e.Value = ToString(sender, p_xemdanhsach_baocaodanhgia.tg_danhgia, true);
        }
        
        public void Text13__GetValue(object sender, Stimulsoft.Report.Events.StiGetValueEventArgs e)
        {
            // CheckerInfo: Text Text13
            e.Value = this.Text13.TextFormat.Format(CheckExcelValue(sender, p_xemdanhsach_baocaodanhgia.cot_a));
        }
        
        public void Text14__GetValue(object sender, Stimulsoft.Report.Events.StiGetValueEventArgs e)
        {
            // CheckerInfo: Text Text14
            e.Value = this.Text14.TextFormat.Format(CheckExcelValue(sender, p_xemdanhsach_baocaodanhgia.cot_b));
        }
        
        public void Text15__GetValue(object sender, Stimulsoft.Report.Events.StiGetValueEventArgs e)
        {
            // CheckerInfo: Text Text15
            e.Value = this.Text15.TextFormat.Format(CheckExcelValue(sender, p_xemdanhsach_baocaodanhgia.cot_c));
        }
        
        public void Text16__GetValue(object sender, Stimulsoft.Report.Events.StiGetValueEventArgs e)
        {
            // CheckerInfo: Text Text16
            e.Value = this.Text16.TextFormat.Format(CheckExcelValue(sender, p_xemdanhsach_baocaodanhgia.cot_d));
        }
        
        public void Text17__GetValue(object sender, Stimulsoft.Report.Events.StiGetValueEventArgs e)
        {
            // CheckerInfo: Text Text17
            e.Value = this.Text17.TextFormat.Format(CheckExcelValue(sender, p_xemdanhsach_baocaodanhgia.cot_e));
        }
        
        public void Text18__GetValue(object sender, Stimulsoft.Report.Events.StiGetValueEventArgs e)
        {
            // CheckerInfo: Text Text18
            e.Value = ToString(sender, p_xemdanhsach_baocaodanhgia.noidung_dg, true);
        }
        
        public void Text21__GetValue(object sender, Stimulsoft.Report.Events.StiGetValueEventArgs e)
        {
            // CheckerInfo: Text Text21
            e.Value = ToString(sender, nhanvienin, true);
        }
        
        public void Text22__GetValue(object sender, Stimulsoft.Report.Events.StiGetValueEventArgs e)
        {
            // CheckerInfo: Text Text22
            e.Value = ToString(sender, p_xemdanhsach_baocaodanhgia.ngayin, true);
        }
        
        public void Text23__GetValue(object sender, Stimulsoft.Report.Events.StiGetValueEventArgs e)
        {
            // CheckerInfo: Text Text23
            e.Value = "Người lập báo cáo";
        }
        
        public void CheckEndRenderRuntimes__EndRender(object sender, System.EventArgs e)
        {
            Stimulsoft.Report.Components.StiSimpleText.CheckEndRenderRuntimes(this);
        }
        
        private void InitializeComponent()
        {
            this.p_xemdanhsach_baocaodanhgia = new p_xemdanhsach_baocaodanhgiaDataSource();
            this.Dictionary.Variables.Add(new Stimulsoft.Report.Dictionary.StiVariable("", "madonvi", "madonvi", "", typeof(string), "", true, Stimulsoft.Report.Dictionary.StiVariableInitBy.Value, false, new Stimulsoft.Report.Dictionary.StiDialogInfo(Stimulsoft.Report.Dictionary.StiDateTimeType.Date, "", true, new string[0], new string[0]), "be5848fdf85d4453a8ff00cf08ba7ef0", true, Stimulsoft.Report.Dictionary.StiSelectionMode.FromVariable));
            this.Dictionary.Variables.Add(new Stimulsoft.Report.Dictionary.StiVariable("", "tungay", "tungay", "", typeof(string), "", true, Stimulsoft.Report.Dictionary.StiVariableInitBy.Value, false, new Stimulsoft.Report.Dictionary.StiDialogInfo(Stimulsoft.Report.Dictionary.StiDateTimeType.Date, "", true, new string[0], new string[0]), "192200afe3e94dffad5b0e5d83440e0d", true, Stimulsoft.Report.Dictionary.StiSelectionMode.FromVariable));
            this.Dictionary.Variables.Add(new Stimulsoft.Report.Dictionary.StiVariable("", "denngay", "denngay", "", typeof(string), "", true, Stimulsoft.Report.Dictionary.StiVariableInitBy.Value, false, new Stimulsoft.Report.Dictionary.StiDialogInfo(Stimulsoft.Report.Dictionary.StiDateTimeType.Date, "", true, new string[0], new string[0]), "e6b5b0d268684f64b7c966bc39558572", true, Stimulsoft.Report.Dictionary.StiSelectionMode.FromVariable));
            this.Dictionary.Variables.Add(new Stimulsoft.Report.Dictionary.StiVariable("", "manhanvien", "manhanvien", "", typeof(string), "", true, Stimulsoft.Report.Dictionary.StiVariableInitBy.Value, false, new Stimulsoft.Report.Dictionary.StiDialogInfo(Stimulsoft.Report.Dictionary.StiDateTimeType.Date, "", true, new string[0], new string[0]), "8e16caed39e946cc87f7af82f8dae6fb", true, Stimulsoft.Report.Dictionary.StiSelectionMode.FromVariable));
            this.Dictionary.Variables.Add(new Stimulsoft.Report.Dictionary.StiVariable("", "thoigianbaocao", "thoigianbaocao", "", typeof(string), "", true, Stimulsoft.Report.Dictionary.StiVariableInitBy.Value, false, new Stimulsoft.Report.Dictionary.StiDialogInfo(Stimulsoft.Report.Dictionary.StiDateTimeType.Date, "", true, new string[0], new string[0]), "ff79ef969d9a4fdea4128c7c469b8311", true, Stimulsoft.Report.Dictionary.StiSelectionMode.FromVariable));
            this.Dictionary.Variables.Add(new Stimulsoft.Report.Dictionary.StiVariable("", "nhanvienin", "nhanvienin", "", typeof(string), "", true, Stimulsoft.Report.Dictionary.StiVariableInitBy.Value, false, new Stimulsoft.Report.Dictionary.StiDialogInfo(Stimulsoft.Report.Dictionary.StiDateTimeType.Date, "", true, new string[0], new string[0]), "fa675ef88b534976afa5d934b73b3d39", true, Stimulsoft.Report.Dictionary.StiSelectionMode.FromVariable));
            this.NeedsCompiling = false;
            // 
            // Variables init
            // 
            this.EngineVersion = Stimulsoft.Report.Engine.StiEngineVersion.EngineV2;
            this.Key = "b49fe77a52b14bc0b253538caeaf8a97";
            this.ReferencedAssemblies = new string[] {
                    "System.Dll",
                    "System.Drawing.Dll",
                    "System.Windows.Forms.Dll",
                    "System.Data.Dll",
                    "System.Xml.Dll",
                    "Stimulsoft.Controls.Dll",
                    "Stimulsoft.Base.Dll",
                    "Stimulsoft.Report.Dll"};
            this.ReportAlias = "Report";
            // 
            // ReportChanged
            // 
            this.ReportChanged = new DateTime(2021, 11, 16, 16, 44, 9, 70);
            // 
            // ReportCreated
            // 
            this.ReportCreated = new DateTime(2021, 11, 16, 15, 10, 55, 0);
            this.ReportFile = "C:\\xampp\\htdocs\\ql_layykien\\php\\reports\\report\\rp_baocaoketquadanhgia.mrt";
            this.ReportGuid = "3109b5f13cae47aaa9dd1b424609b069";
            this.ReportName = "Report";
            this.ReportUnit = Stimulsoft.Report.StiReportUnitType.Inches;
            this.ReportVersion = "2020.4.1.0";
            this.ScriptLanguage = Stimulsoft.Report.StiReportLanguageType.CSharp;
            // 
            // Page1
            // 
            this.Page1 = new Stimulsoft.Report.Components.StiPage();
            this.Page1.Guid = "7dfc2fba18064866807eec933e8c09e0";
            this.Page1.Name = "Page1";
            this.Page1.Orientation = Stimulsoft.Report.Components.StiPageOrientation.Landscape;
            this.Page1.PageHeight = 8.27;
            this.Page1.PageWidth = 11.68;
            this.Page1.PaperSize = System.Drawing.Printing.PaperKind.A4;
            this.Page1.Border = new Stimulsoft.Base.Drawing.StiBorder(Stimulsoft.Base.Drawing.StiBorderSides.None, System.Drawing.Color.Black, 2, Stimulsoft.Base.Drawing.StiPenStyle.Solid, false, 4, new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black), false);
            this.Page1.Brush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Transparent);
            // 
            // ReportTitleBand1
            // 
            this.ReportTitleBand1 = new Stimulsoft.Report.Components.StiReportTitleBand();
            this.ReportTitleBand1.ClientRectangle = new Stimulsoft.Base.Drawing.RectangleD(0, 0.2, 10.9, 0.8);
            this.ReportTitleBand1.Name = "ReportTitleBand1";
            this.ReportTitleBand1.Border = new Stimulsoft.Base.Drawing.StiBorder(Stimulsoft.Base.Drawing.StiBorderSides.None, System.Drawing.Color.Black, 1, Stimulsoft.Base.Drawing.StiPenStyle.Solid, false, 4, new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black), false);
            this.ReportTitleBand1.Brush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Transparent);
            // 
            // Text19
            // 
            this.Text19 = new Stimulsoft.Report.Components.StiText();
            this.Text19.ClientRectangle = new Stimulsoft.Base.Drawing.RectangleD(0, 0.4, 10.9, 0.4);
            this.Text19.HorAlignment = Stimulsoft.Base.Drawing.StiTextHorAlignment.Center;
            this.Text19.Name = "Text19";
            this.Text19.GetValue += new Stimulsoft.Report.Events.StiGetValueEventHandler(this.Text19__GetValue);
            this.Text19.VertAlignment = Stimulsoft.Base.Drawing.StiVertAlignment.Center;
            this.Text19.Border = new Stimulsoft.Base.Drawing.StiBorder(Stimulsoft.Base.Drawing.StiBorderSides.None, System.Drawing.Color.Black, 1, Stimulsoft.Base.Drawing.StiPenStyle.Solid, false, 4, new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black), false);
            this.Text19.Brush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Transparent);
            this.Text19.Font = new System.Drawing.Font("Times New Roman", 16F, System.Drawing.FontStyle.Bold);
            this.Text19.Indicator = null;
            this.Text19.Interaction = null;
            this.Text19.Margins = new Stimulsoft.Report.Components.StiMargins(0, 0, 0, 0);
            this.Text19.TextBrush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black);
            this.Text19.TextOptions = new Stimulsoft.Base.Drawing.StiTextOptions(false, false, false, 0F, System.Drawing.Text.HotkeyPrefix.None, System.Drawing.StringTrimming.None);
            // 
            // Text20
            // 
            this.Text20 = new Stimulsoft.Report.Components.StiText();
            this.Text20.ClientRectangle = new Stimulsoft.Base.Drawing.RectangleD(0, 0, 10.9, 0.4);
            this.Text20.HorAlignment = Stimulsoft.Base.Drawing.StiTextHorAlignment.Center;
            this.Text20.Name = "Text20";
            this.Text20.GetValue += new Stimulsoft.Report.Events.StiGetValueEventHandler(this.Text20__GetValue);
            this.Text20.Type = Stimulsoft.Report.Components.StiSystemTextType.Expression;
            this.Text20.VertAlignment = Stimulsoft.Base.Drawing.StiVertAlignment.Center;
            this.Text20.Border = new Stimulsoft.Base.Drawing.StiBorder(Stimulsoft.Base.Drawing.StiBorderSides.None, System.Drawing.Color.Black, 1, Stimulsoft.Base.Drawing.StiPenStyle.Solid, false, 4, new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black), false);
            this.Text20.Brush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Transparent);
            this.Text20.Font = new System.Drawing.Font("Times New Roman", 22F, System.Drawing.FontStyle.Bold);
            this.Text20.Indicator = null;
            this.Text20.Interaction = null;
            this.Text20.Margins = new Stimulsoft.Report.Components.StiMargins(0, 0, 0, 0);
            this.Text20.TextBrush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black);
            this.Text20.TextOptions = new Stimulsoft.Base.Drawing.StiTextOptions(false, false, false, 0F, System.Drawing.Text.HotkeyPrefix.None, System.Drawing.StringTrimming.None);
            this.ReportTitleBand1.Interaction = null;
            // 
            // ColumnHeaderBand1
            // 
            this.ColumnHeaderBand1 = new Stimulsoft.Report.Components.StiColumnHeaderBand();
            this.ColumnHeaderBand1.ClientRectangle = new Stimulsoft.Base.Drawing.RectangleD(0, 1.4, 10.9, 0.3);
            this.ColumnHeaderBand1.Name = "ColumnHeaderBand1";
            this.ColumnHeaderBand1.Border = new Stimulsoft.Base.Drawing.StiBorder(Stimulsoft.Base.Drawing.StiBorderSides.None, System.Drawing.Color.Black, 1, Stimulsoft.Base.Drawing.StiPenStyle.Solid, false, 4, new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black), false);
            this.ColumnHeaderBand1.Brush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Transparent);
            // 
            // Text1
            // 
            this.Text1 = new Stimulsoft.Report.Components.StiText();
            this.Text1.ClientRectangle = new Stimulsoft.Base.Drawing.RectangleD(0, 0, 0.6, 0.3);
            this.Text1.HorAlignment = Stimulsoft.Base.Drawing.StiTextHorAlignment.Center;
            this.Text1.Name = "Text1";
            this.Text1.GetValue += new Stimulsoft.Report.Events.StiGetValueEventHandler(this.Text1__GetValue);
            this.Text1.Type = Stimulsoft.Report.Components.StiSystemTextType.Expression;
            this.Text1.VertAlignment = Stimulsoft.Base.Drawing.StiVertAlignment.Center;
            this.Text1.Border = new Stimulsoft.Base.Drawing.StiBorder(Stimulsoft.Base.Drawing.StiBorderSides.All, System.Drawing.Color.Black, 1, Stimulsoft.Base.Drawing.StiPenStyle.Solid, false, 4, new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black), false);
            this.Text1.Brush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Transparent);
            this.Text1.Font = new System.Drawing.Font("Times New Roman", 14F, System.Drawing.FontStyle.Bold);
            this.Text1.Indicator = null;
            this.Text1.Interaction = null;
            this.Text1.Margins = new Stimulsoft.Report.Components.StiMargins(0, 0, 0, 0);
            this.Text1.TextBrush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black);
            this.Text1.TextOptions = new Stimulsoft.Base.Drawing.StiTextOptions(false, false, false, 0F, System.Drawing.Text.HotkeyPrefix.None, System.Drawing.StringTrimming.None);
            // 
            // Text2
            // 
            this.Text2 = new Stimulsoft.Report.Components.StiText();
            this.Text2.ClientRectangle = new Stimulsoft.Base.Drawing.RectangleD(0.6, 0, 2.9, 0.3);
            this.Text2.HorAlignment = Stimulsoft.Base.Drawing.StiTextHorAlignment.Center;
            this.Text2.Name = "Text2";
            this.Text2.GetValue += new Stimulsoft.Report.Events.StiGetValueEventHandler(this.Text2__GetValue);
            this.Text2.Type = Stimulsoft.Report.Components.StiSystemTextType.Expression;
            this.Text2.VertAlignment = Stimulsoft.Base.Drawing.StiVertAlignment.Center;
            this.Text2.Border = new Stimulsoft.Base.Drawing.StiBorder(Stimulsoft.Base.Drawing.StiBorderSides.All, System.Drawing.Color.Black, 1, Stimulsoft.Base.Drawing.StiPenStyle.Solid, false, 4, new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black), false);
            this.Text2.Brush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Transparent);
            this.Text2.Font = new System.Drawing.Font("Times New Roman", 14F, System.Drawing.FontStyle.Bold);
            this.Text2.Indicator = null;
            this.Text2.Interaction = null;
            this.Text2.Margins = new Stimulsoft.Report.Components.StiMargins(0, 0, 0, 0);
            this.Text2.TextBrush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black);
            this.Text2.TextOptions = new Stimulsoft.Base.Drawing.StiTextOptions(false, false, false, 0F, System.Drawing.Text.HotkeyPrefix.None, System.Drawing.StringTrimming.None);
            // 
            // Text3
            // 
            this.Text3 = new Stimulsoft.Report.Components.StiText();
            this.Text3.ClientRectangle = new Stimulsoft.Base.Drawing.RectangleD(3.5, 0, 2.3, 0.3);
            this.Text3.HorAlignment = Stimulsoft.Base.Drawing.StiTextHorAlignment.Center;
            this.Text3.Name = "Text3";
            this.Text3.GetValue += new Stimulsoft.Report.Events.StiGetValueEventHandler(this.Text3__GetValue);
            this.Text3.Type = Stimulsoft.Report.Components.StiSystemTextType.Expression;
            this.Text3.VertAlignment = Stimulsoft.Base.Drawing.StiVertAlignment.Center;
            this.Text3.Border = new Stimulsoft.Base.Drawing.StiBorder(Stimulsoft.Base.Drawing.StiBorderSides.All, System.Drawing.Color.Black, 1, Stimulsoft.Base.Drawing.StiPenStyle.Solid, false, 4, new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black), false);
            this.Text3.Brush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Transparent);
            this.Text3.Font = new System.Drawing.Font("Times New Roman", 14F, System.Drawing.FontStyle.Bold);
            this.Text3.Indicator = null;
            this.Text3.Interaction = null;
            this.Text3.Margins = new Stimulsoft.Report.Components.StiMargins(0, 0, 0, 0);
            this.Text3.TextBrush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black);
            this.Text3.TextOptions = new Stimulsoft.Base.Drawing.StiTextOptions(false, false, false, 0F, System.Drawing.Text.HotkeyPrefix.None, System.Drawing.StringTrimming.None);
            // 
            // Text4
            // 
            this.Text4 = new Stimulsoft.Report.Components.StiText();
            this.Text4.ClientRectangle = new Stimulsoft.Base.Drawing.RectangleD(5.8, 0, 0.4, 0.3);
            this.Text4.HorAlignment = Stimulsoft.Base.Drawing.StiTextHorAlignment.Center;
            this.Text4.Name = "Text4";
            this.Text4.GetValue += new Stimulsoft.Report.Events.StiGetValueEventHandler(this.Text4__GetValue);
            this.Text4.Type = Stimulsoft.Report.Components.StiSystemTextType.Expression;
            this.Text4.VertAlignment = Stimulsoft.Base.Drawing.StiVertAlignment.Center;
            this.Text4.Border = new Stimulsoft.Base.Drawing.StiBorder(Stimulsoft.Base.Drawing.StiBorderSides.All, System.Drawing.Color.Black, 1, Stimulsoft.Base.Drawing.StiPenStyle.Solid, false, 4, new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black), false);
            this.Text4.Brush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Transparent);
            this.Text4.Font = new System.Drawing.Font("Times New Roman", 14F, System.Drawing.FontStyle.Bold);
            this.Text4.Indicator = null;
            this.Text4.Interaction = null;
            this.Text4.Margins = new Stimulsoft.Report.Components.StiMargins(0, 0, 0, 0);
            this.Text4.TextBrush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black);
            this.Text4.TextOptions = new Stimulsoft.Base.Drawing.StiTextOptions(false, false, false, 0F, System.Drawing.Text.HotkeyPrefix.None, System.Drawing.StringTrimming.None);
            // 
            // Text5
            // 
            this.Text5 = new Stimulsoft.Report.Components.StiText();
            this.Text5.ClientRectangle = new Stimulsoft.Base.Drawing.RectangleD(6.2, 0, 0.4, 0.3);
            this.Text5.HorAlignment = Stimulsoft.Base.Drawing.StiTextHorAlignment.Center;
            this.Text5.Name = "Text5";
            this.Text5.GetValue += new Stimulsoft.Report.Events.StiGetValueEventHandler(this.Text5__GetValue);
            this.Text5.Type = Stimulsoft.Report.Components.StiSystemTextType.Expression;
            this.Text5.VertAlignment = Stimulsoft.Base.Drawing.StiVertAlignment.Center;
            this.Text5.Border = new Stimulsoft.Base.Drawing.StiBorder(Stimulsoft.Base.Drawing.StiBorderSides.All, System.Drawing.Color.Black, 1, Stimulsoft.Base.Drawing.StiPenStyle.Solid, false, 4, new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black), false);
            this.Text5.Brush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Transparent);
            this.Text5.Font = new System.Drawing.Font("Times New Roman", 14F, System.Drawing.FontStyle.Bold);
            this.Text5.Indicator = null;
            this.Text5.Interaction = null;
            this.Text5.Margins = new Stimulsoft.Report.Components.StiMargins(0, 0, 0, 0);
            this.Text5.TextBrush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black);
            this.Text5.TextOptions = new Stimulsoft.Base.Drawing.StiTextOptions(false, false, false, 0F, System.Drawing.Text.HotkeyPrefix.None, System.Drawing.StringTrimming.None);
            // 
            // Text6
            // 
            this.Text6 = new Stimulsoft.Report.Components.StiText();
            this.Text6.ClientRectangle = new Stimulsoft.Base.Drawing.RectangleD(6.6, 0, 0.4, 0.3);
            this.Text6.HorAlignment = Stimulsoft.Base.Drawing.StiTextHorAlignment.Center;
            this.Text6.Name = "Text6";
            this.Text6.GetValue += new Stimulsoft.Report.Events.StiGetValueEventHandler(this.Text6__GetValue);
            this.Text6.Type = Stimulsoft.Report.Components.StiSystemTextType.Expression;
            this.Text6.VertAlignment = Stimulsoft.Base.Drawing.StiVertAlignment.Center;
            this.Text6.Border = new Stimulsoft.Base.Drawing.StiBorder(Stimulsoft.Base.Drawing.StiBorderSides.All, System.Drawing.Color.Black, 1, Stimulsoft.Base.Drawing.StiPenStyle.Solid, false, 4, new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black), false);
            this.Text6.Brush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Transparent);
            this.Text6.Font = new System.Drawing.Font("Times New Roman", 14F, System.Drawing.FontStyle.Bold);
            this.Text6.Indicator = null;
            this.Text6.Interaction = null;
            this.Text6.Margins = new Stimulsoft.Report.Components.StiMargins(0, 0, 0, 0);
            this.Text6.TextBrush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black);
            this.Text6.TextOptions = new Stimulsoft.Base.Drawing.StiTextOptions(false, false, false, 0F, System.Drawing.Text.HotkeyPrefix.None, System.Drawing.StringTrimming.None);
            // 
            // Text7
            // 
            this.Text7 = new Stimulsoft.Report.Components.StiText();
            this.Text7.ClientRectangle = new Stimulsoft.Base.Drawing.RectangleD(7, 0, 0.4, 0.3);
            this.Text7.HorAlignment = Stimulsoft.Base.Drawing.StiTextHorAlignment.Center;
            this.Text7.Name = "Text7";
            this.Text7.GetValue += new Stimulsoft.Report.Events.StiGetValueEventHandler(this.Text7__GetValue);
            this.Text7.Type = Stimulsoft.Report.Components.StiSystemTextType.Expression;
            this.Text7.VertAlignment = Stimulsoft.Base.Drawing.StiVertAlignment.Center;
            this.Text7.Border = new Stimulsoft.Base.Drawing.StiBorder(Stimulsoft.Base.Drawing.StiBorderSides.All, System.Drawing.Color.Black, 1, Stimulsoft.Base.Drawing.StiPenStyle.Solid, false, 4, new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black), false);
            this.Text7.Brush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Transparent);
            this.Text7.Font = new System.Drawing.Font("Times New Roman", 14F, System.Drawing.FontStyle.Bold);
            this.Text7.Indicator = null;
            this.Text7.Interaction = null;
            this.Text7.Margins = new Stimulsoft.Report.Components.StiMargins(0, 0, 0, 0);
            this.Text7.TextBrush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black);
            this.Text7.TextOptions = new Stimulsoft.Base.Drawing.StiTextOptions(false, false, false, 0F, System.Drawing.Text.HotkeyPrefix.None, System.Drawing.StringTrimming.None);
            // 
            // Text8
            // 
            this.Text8 = new Stimulsoft.Report.Components.StiText();
            this.Text8.ClientRectangle = new Stimulsoft.Base.Drawing.RectangleD(7.4, 0, 0.4, 0.3);
            this.Text8.HorAlignment = Stimulsoft.Base.Drawing.StiTextHorAlignment.Center;
            this.Text8.Name = "Text8";
            this.Text8.GetValue += new Stimulsoft.Report.Events.StiGetValueEventHandler(this.Text8__GetValue);
            this.Text8.Type = Stimulsoft.Report.Components.StiSystemTextType.Expression;
            this.Text8.VertAlignment = Stimulsoft.Base.Drawing.StiVertAlignment.Center;
            this.Text8.Border = new Stimulsoft.Base.Drawing.StiBorder(Stimulsoft.Base.Drawing.StiBorderSides.All, System.Drawing.Color.Black, 1, Stimulsoft.Base.Drawing.StiPenStyle.Solid, false, 4, new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black), false);
            this.Text8.Brush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Transparent);
            this.Text8.Font = new System.Drawing.Font("Times New Roman", 14F, System.Drawing.FontStyle.Bold);
            this.Text8.Indicator = null;
            this.Text8.Interaction = null;
            this.Text8.Margins = new Stimulsoft.Report.Components.StiMargins(0, 0, 0, 0);
            this.Text8.TextBrush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black);
            this.Text8.TextOptions = new Stimulsoft.Base.Drawing.StiTextOptions(false, false, false, 0F, System.Drawing.Text.HotkeyPrefix.None, System.Drawing.StringTrimming.None);
            // 
            // Text9
            // 
            this.Text9 = new Stimulsoft.Report.Components.StiText();
            this.Text9.ClientRectangle = new Stimulsoft.Base.Drawing.RectangleD(7.8, 0, 3.1, 0.3);
            this.Text9.HorAlignment = Stimulsoft.Base.Drawing.StiTextHorAlignment.Center;
            this.Text9.Name = "Text9";
            this.Text9.GetValue += new Stimulsoft.Report.Events.StiGetValueEventHandler(this.Text9__GetValue);
            this.Text9.Type = Stimulsoft.Report.Components.StiSystemTextType.Expression;
            this.Text9.VertAlignment = Stimulsoft.Base.Drawing.StiVertAlignment.Center;
            this.Text9.Border = new Stimulsoft.Base.Drawing.StiBorder(Stimulsoft.Base.Drawing.StiBorderSides.All, System.Drawing.Color.Black, 1, Stimulsoft.Base.Drawing.StiPenStyle.Solid, false, 4, new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black), false);
            this.Text9.Brush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Transparent);
            this.Text9.Font = new System.Drawing.Font("Times New Roman", 14F, System.Drawing.FontStyle.Bold);
            this.Text9.Indicator = null;
            this.Text9.Interaction = null;
            this.Text9.Margins = new Stimulsoft.Report.Components.StiMargins(0, 0, 0, 0);
            this.Text9.TextBrush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black);
            this.Text9.TextOptions = new Stimulsoft.Base.Drawing.StiTextOptions(false, false, false, 0F, System.Drawing.Text.HotkeyPrefix.None, System.Drawing.StringTrimming.None);
            this.ColumnHeaderBand1.Interaction = null;
            // 
            // DataBand1
            // 
            this.DataBand1 = new Stimulsoft.Report.Components.StiDataBand();
            this.DataBand1.ClientRectangle = new Stimulsoft.Base.Drawing.RectangleD(0, 2.1, 10.9, 0.3);
            this.DataBand1.DataSourceName = "p_xemdanhsach_baocaodanhgia";
            this.DataBand1.Name = "DataBand1";
            this.DataBand1.Sort = new string[0];
            this.DataBand1.Border = new Stimulsoft.Base.Drawing.StiBorder(Stimulsoft.Base.Drawing.StiBorderSides.None, System.Drawing.Color.Black, 1, Stimulsoft.Base.Drawing.StiPenStyle.Solid, false, 4, new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black), false);
            this.DataBand1.Brush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Transparent);
            this.DataBand1.BusinessObjectGuid = null;
            // 
            // Text10
            // 
            this.Text10 = new Stimulsoft.Report.Components.StiText();
            this.Text10.CanShrink = true;
            this.Text10.ClientRectangle = new Stimulsoft.Base.Drawing.RectangleD(0, 0, 0.6, 0.3);
            this.Text10.GrowToHeight = true;
            this.Text10.HorAlignment = Stimulsoft.Base.Drawing.StiTextHorAlignment.Center;
            this.Text10.Name = "Text10";
            this.Text10.GetValue += new Stimulsoft.Report.Events.StiGetValueEventHandler(this.Text10__GetValue);
            this.Text10.VertAlignment = Stimulsoft.Base.Drawing.StiVertAlignment.Center;
            this.Text10.Border = new Stimulsoft.Base.Drawing.StiBorder(Stimulsoft.Base.Drawing.StiBorderSides.All, System.Drawing.Color.Black, 1, Stimulsoft.Base.Drawing.StiPenStyle.Solid, false, 4, new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black), false);
            this.Text10.Brush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Transparent);
            this.Text10.Font = new System.Drawing.Font("Times New Roman", 14F);
            this.Text10.Indicator = null;
            this.Text10.Interaction = null;
            this.Text10.Margins = new Stimulsoft.Report.Components.StiMargins(0, 0, 0, 0);
            this.Text10.TextBrush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black);
            this.Text10.TextOptions = new Stimulsoft.Base.Drawing.StiTextOptions(false, false, true, 0F, System.Drawing.Text.HotkeyPrefix.None, System.Drawing.StringTrimming.None);
            // 
            // Text11
            // 
            this.Text11 = new Stimulsoft.Report.Components.StiText();
            this.Text11.CanShrink = true;
            this.Text11.ClientRectangle = new Stimulsoft.Base.Drawing.RectangleD(0.6, 0, 2.9, 0.3);
            this.Text11.GrowToHeight = true;
            this.Text11.Name = "Text11";
            this.Text11.GetValue += new Stimulsoft.Report.Events.StiGetValueEventHandler(this.Text11__GetValue);
            this.Text11.VertAlignment = Stimulsoft.Base.Drawing.StiVertAlignment.Center;
            this.Text11.Border = new Stimulsoft.Base.Drawing.StiBorder(Stimulsoft.Base.Drawing.StiBorderSides.All, System.Drawing.Color.Black, 1, Stimulsoft.Base.Drawing.StiPenStyle.Solid, false, 4, new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black), false);
            this.Text11.Brush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Transparent);
            this.Text11.Font = new System.Drawing.Font("Times New Roman", 14F);
            this.Text11.Indicator = null;
            this.Text11.Interaction = null;
            this.Text11.Margins = new Stimulsoft.Report.Components.StiMargins(2, 0, 0, 0);
            this.Text11.TextBrush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black);
            this.Text11.TextOptions = new Stimulsoft.Base.Drawing.StiTextOptions(false, false, true, 0F, System.Drawing.Text.HotkeyPrefix.None, System.Drawing.StringTrimming.None);
            // 
            // Text12
            // 
            this.Text12 = new Stimulsoft.Report.Components.StiText();
            this.Text12.CanShrink = true;
            this.Text12.ClientRectangle = new Stimulsoft.Base.Drawing.RectangleD(3.5, 0, 2.3, 0.3);
            this.Text12.GrowToHeight = true;
            this.Text12.HorAlignment = Stimulsoft.Base.Drawing.StiTextHorAlignment.Center;
            this.Text12.Name = "Text12";
            this.Text12.GetValue += new Stimulsoft.Report.Events.StiGetValueEventHandler(this.Text12__GetValue);
            this.Text12.VertAlignment = Stimulsoft.Base.Drawing.StiVertAlignment.Center;
            this.Text12.Border = new Stimulsoft.Base.Drawing.StiBorder(Stimulsoft.Base.Drawing.StiBorderSides.All, System.Drawing.Color.Black, 1, Stimulsoft.Base.Drawing.StiPenStyle.Solid, false, 4, new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black), false);
            this.Text12.Brush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Transparent);
            this.Text12.Font = new System.Drawing.Font("Times New Roman", 14F);
            this.Text12.Indicator = null;
            this.Text12.Interaction = null;
            this.Text12.Margins = new Stimulsoft.Report.Components.StiMargins(0, 0, 0, 0);
            this.Text12.TextBrush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black);
            this.Text12.TextOptions = new Stimulsoft.Base.Drawing.StiTextOptions(false, false, true, 0F, System.Drawing.Text.HotkeyPrefix.None, System.Drawing.StringTrimming.None);
            // 
            // Text13
            // 
            this.Text13 = new Stimulsoft.Report.Components.StiText();
            this.Text13.CanShrink = true;
            this.Text13.ClientRectangle = new Stimulsoft.Base.Drawing.RectangleD(5.8, 0, 0.4, 0.3);
            this.Text13.GrowToHeight = true;
            this.Text13.HorAlignment = Stimulsoft.Base.Drawing.StiTextHorAlignment.Center;
            this.Text13.Name = "Text13";
            this.Text13.GetValue += new Stimulsoft.Report.Events.StiGetValueEventHandler(this.Text13__GetValue);
            this.Text13.VertAlignment = Stimulsoft.Base.Drawing.StiVertAlignment.Center;
            this.Text13.Border = new Stimulsoft.Base.Drawing.StiBorder(Stimulsoft.Base.Drawing.StiBorderSides.All, System.Drawing.Color.Black, 1, Stimulsoft.Base.Drawing.StiPenStyle.Solid, false, 4, new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black), false);
            this.Text13.Brush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Transparent);
            this.Text13.Font = new System.Drawing.Font("Times New Roman", 14F);
            this.Text13.Indicator = null;
            this.Text13.Interaction = null;
            this.Text13.Margins = new Stimulsoft.Report.Components.StiMargins(0, 0, 0, 0);
            this.Text13.TextBrush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black);
            this.Text13.TextFormat = new Stimulsoft.Report.Components.TextFormats.StiNumberFormatService(1, ",", 0, ".", 3, true, false, " ");
            this.Text13.TextOptions = new Stimulsoft.Base.Drawing.StiTextOptions(false, false, true, 0F, System.Drawing.Text.HotkeyPrefix.None, System.Drawing.StringTrimming.None);
            // 
            // Text14
            // 
            this.Text14 = new Stimulsoft.Report.Components.StiText();
            this.Text14.CanShrink = true;
            this.Text14.ClientRectangle = new Stimulsoft.Base.Drawing.RectangleD(6.2, 0, 0.4, 0.3);
            this.Text14.GrowToHeight = true;
            this.Text14.HorAlignment = Stimulsoft.Base.Drawing.StiTextHorAlignment.Center;
            this.Text14.Name = "Text14";
            this.Text14.GetValue += new Stimulsoft.Report.Events.StiGetValueEventHandler(this.Text14__GetValue);
            this.Text14.VertAlignment = Stimulsoft.Base.Drawing.StiVertAlignment.Center;
            this.Text14.Border = new Stimulsoft.Base.Drawing.StiBorder(Stimulsoft.Base.Drawing.StiBorderSides.All, System.Drawing.Color.Black, 1, Stimulsoft.Base.Drawing.StiPenStyle.Solid, false, 4, new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black), false);
            this.Text14.Brush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Transparent);
            this.Text14.Font = new System.Drawing.Font("Times New Roman", 14F);
            this.Text14.Indicator = null;
            this.Text14.Interaction = null;
            this.Text14.Margins = new Stimulsoft.Report.Components.StiMargins(0, 0, 0, 0);
            this.Text14.TextBrush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black);
            this.Text14.TextFormat = new Stimulsoft.Report.Components.TextFormats.StiNumberFormatService(1, ",", 0, ".", 3, true, false, " ");
            this.Text14.TextOptions = new Stimulsoft.Base.Drawing.StiTextOptions(false, false, true, 0F, System.Drawing.Text.HotkeyPrefix.None, System.Drawing.StringTrimming.None);
            // 
            // Text15
            // 
            this.Text15 = new Stimulsoft.Report.Components.StiText();
            this.Text15.CanShrink = true;
            this.Text15.ClientRectangle = new Stimulsoft.Base.Drawing.RectangleD(6.6, 0, 0.4, 0.3);
            this.Text15.GrowToHeight = true;
            this.Text15.HorAlignment = Stimulsoft.Base.Drawing.StiTextHorAlignment.Center;
            this.Text15.Name = "Text15";
            this.Text15.GetValue += new Stimulsoft.Report.Events.StiGetValueEventHandler(this.Text15__GetValue);
            this.Text15.VertAlignment = Stimulsoft.Base.Drawing.StiVertAlignment.Center;
            this.Text15.Border = new Stimulsoft.Base.Drawing.StiBorder(Stimulsoft.Base.Drawing.StiBorderSides.All, System.Drawing.Color.Black, 1, Stimulsoft.Base.Drawing.StiPenStyle.Solid, false, 4, new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black), false);
            this.Text15.Brush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Transparent);
            this.Text15.Font = new System.Drawing.Font("Times New Roman", 14F);
            this.Text15.Indicator = null;
            this.Text15.Interaction = null;
            this.Text15.Margins = new Stimulsoft.Report.Components.StiMargins(0, 0, 0, 0);
            this.Text15.TextBrush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black);
            this.Text15.TextFormat = new Stimulsoft.Report.Components.TextFormats.StiNumberFormatService(1, ",", 0, ".", 3, true, false, " ");
            this.Text15.TextOptions = new Stimulsoft.Base.Drawing.StiTextOptions(false, false, true, 0F, System.Drawing.Text.HotkeyPrefix.None, System.Drawing.StringTrimming.None);
            // 
            // Text16
            // 
            this.Text16 = new Stimulsoft.Report.Components.StiText();
            this.Text16.CanShrink = true;
            this.Text16.ClientRectangle = new Stimulsoft.Base.Drawing.RectangleD(7, 0, 0.4, 0.3);
            this.Text16.GrowToHeight = true;
            this.Text16.HorAlignment = Stimulsoft.Base.Drawing.StiTextHorAlignment.Center;
            this.Text16.Name = "Text16";
            this.Text16.GetValue += new Stimulsoft.Report.Events.StiGetValueEventHandler(this.Text16__GetValue);
            this.Text16.VertAlignment = Stimulsoft.Base.Drawing.StiVertAlignment.Center;
            this.Text16.Border = new Stimulsoft.Base.Drawing.StiBorder(Stimulsoft.Base.Drawing.StiBorderSides.All, System.Drawing.Color.Black, 1, Stimulsoft.Base.Drawing.StiPenStyle.Solid, false, 4, new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black), false);
            this.Text16.Brush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Transparent);
            this.Text16.Font = new System.Drawing.Font("Times New Roman", 14F);
            this.Text16.Indicator = null;
            this.Text16.Interaction = null;
            this.Text16.Margins = new Stimulsoft.Report.Components.StiMargins(0, 0, 0, 0);
            this.Text16.TextBrush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black);
            this.Text16.TextFormat = new Stimulsoft.Report.Components.TextFormats.StiNumberFormatService(1, ",", 0, ".", 3, true, false, " ");
            this.Text16.TextOptions = new Stimulsoft.Base.Drawing.StiTextOptions(false, false, true, 0F, System.Drawing.Text.HotkeyPrefix.None, System.Drawing.StringTrimming.None);
            // 
            // Text17
            // 
            this.Text17 = new Stimulsoft.Report.Components.StiText();
            this.Text17.CanShrink = true;
            this.Text17.ClientRectangle = new Stimulsoft.Base.Drawing.RectangleD(7.4, 0, 0.4, 0.3);
            this.Text17.GrowToHeight = true;
            this.Text17.HorAlignment = Stimulsoft.Base.Drawing.StiTextHorAlignment.Center;
            this.Text17.Name = "Text17";
            this.Text17.GetValue += new Stimulsoft.Report.Events.StiGetValueEventHandler(this.Text17__GetValue);
            this.Text17.VertAlignment = Stimulsoft.Base.Drawing.StiVertAlignment.Center;
            this.Text17.Border = new Stimulsoft.Base.Drawing.StiBorder(Stimulsoft.Base.Drawing.StiBorderSides.All, System.Drawing.Color.Black, 1, Stimulsoft.Base.Drawing.StiPenStyle.Solid, false, 4, new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black), false);
            this.Text17.Brush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Transparent);
            this.Text17.Font = new System.Drawing.Font("Times New Roman", 14F);
            this.Text17.Indicator = null;
            this.Text17.Interaction = null;
            this.Text17.Margins = new Stimulsoft.Report.Components.StiMargins(0, 0, 0, 0);
            this.Text17.TextBrush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black);
            this.Text17.TextFormat = new Stimulsoft.Report.Components.TextFormats.StiNumberFormatService(1, ",", 0, ".", 3, true, false, " ");
            this.Text17.TextOptions = new Stimulsoft.Base.Drawing.StiTextOptions(false, false, true, 0F, System.Drawing.Text.HotkeyPrefix.None, System.Drawing.StringTrimming.None);
            // 
            // Text18
            // 
            this.Text18 = new Stimulsoft.Report.Components.StiText();
            this.Text18.CanShrink = true;
            this.Text18.ClientRectangle = new Stimulsoft.Base.Drawing.RectangleD(7.8, 0, 3.1, 0.3);
            this.Text18.GrowToHeight = true;
            this.Text18.Name = "Text18";
            this.Text18.GetValue += new Stimulsoft.Report.Events.StiGetValueEventHandler(this.Text18__GetValue);
            this.Text18.VertAlignment = Stimulsoft.Base.Drawing.StiVertAlignment.Center;
            this.Text18.Border = new Stimulsoft.Base.Drawing.StiBorder(Stimulsoft.Base.Drawing.StiBorderSides.All, System.Drawing.Color.Black, 1, Stimulsoft.Base.Drawing.StiPenStyle.Solid, false, 4, new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black), false);
            this.Text18.Brush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Transparent);
            this.Text18.Font = new System.Drawing.Font("Times New Roman", 14F);
            this.Text18.Indicator = null;
            this.Text18.Interaction = null;
            this.Text18.Margins = new Stimulsoft.Report.Components.StiMargins(2, 0, 0, 0);
            this.Text18.TextBrush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black);
            this.Text18.TextOptions = new Stimulsoft.Base.Drawing.StiTextOptions(false, false, true, 0F, System.Drawing.Text.HotkeyPrefix.None, System.Drawing.StringTrimming.None);
            this.DataBand1.DataRelationName = null;
            this.DataBand1.Interaction = null;
            // 
            // ReportSummaryBand1
            // 
            this.ReportSummaryBand1 = new Stimulsoft.Report.Components.StiReportSummaryBand();
            this.ReportSummaryBand1.ClientRectangle = new Stimulsoft.Base.Drawing.RectangleD(0, 2.8, 10.9, 2.3);
            this.ReportSummaryBand1.Name = "ReportSummaryBand1";
            this.ReportSummaryBand1.Border = new Stimulsoft.Base.Drawing.StiBorder(Stimulsoft.Base.Drawing.StiBorderSides.None, System.Drawing.Color.Black, 1, Stimulsoft.Base.Drawing.StiPenStyle.Solid, false, 4, new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black), false);
            this.ReportSummaryBand1.Brush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Transparent);
            // 
            // Text21
            // 
            this.Text21 = new Stimulsoft.Report.Components.StiText();
            this.Text21.ClientRectangle = new Stimulsoft.Base.Drawing.RectangleD(7, 2.1, 3.9, 0.2);
            this.Text21.HorAlignment = Stimulsoft.Base.Drawing.StiTextHorAlignment.Center;
            this.Text21.Name = "Text21";
            this.Text21.GetValue += new Stimulsoft.Report.Events.StiGetValueEventHandler(this.Text21__GetValue);
            this.Text21.VertAlignment = Stimulsoft.Base.Drawing.StiVertAlignment.Center;
            this.Text21.Border = new Stimulsoft.Base.Drawing.StiBorder(Stimulsoft.Base.Drawing.StiBorderSides.None, System.Drawing.Color.Black, 1, Stimulsoft.Base.Drawing.StiPenStyle.Solid, false, 4, new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black), false);
            this.Text21.Brush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Transparent);
            this.Text21.Font = new System.Drawing.Font("Times New Roman", 16F, System.Drawing.FontStyle.Bold);
            this.Text21.Indicator = null;
            this.Text21.Interaction = null;
            this.Text21.Margins = new Stimulsoft.Report.Components.StiMargins(0, 0, 0, 0);
            this.Text21.TextBrush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black);
            this.Text21.TextOptions = new Stimulsoft.Base.Drawing.StiTextOptions(false, false, false, 0F, System.Drawing.Text.HotkeyPrefix.None, System.Drawing.StringTrimming.None);
            // 
            // Text22
            // 
            this.Text22 = new Stimulsoft.Report.Components.StiText();
            this.Text22.ClientRectangle = new Stimulsoft.Base.Drawing.RectangleD(7, 0, 3.9, 0.5);
            this.Text22.HorAlignment = Stimulsoft.Base.Drawing.StiTextHorAlignment.Center;
            this.Text22.Name = "Text22";
            this.Text22.GetValue += new Stimulsoft.Report.Events.StiGetValueEventHandler(this.Text22__GetValue);
            this.Text22.Type = Stimulsoft.Report.Components.StiSystemTextType.DataColumn;
            this.Text22.VertAlignment = Stimulsoft.Base.Drawing.StiVertAlignment.Bottom;
            this.Text22.Border = new Stimulsoft.Base.Drawing.StiBorder(Stimulsoft.Base.Drawing.StiBorderSides.None, System.Drawing.Color.Black, 1, Stimulsoft.Base.Drawing.StiPenStyle.Solid, false, 4, new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black), false);
            this.Text22.Brush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Transparent);
            this.Text22.Font = new System.Drawing.Font("Times New Roman", 14F);
            this.Text22.Indicator = null;
            this.Text22.Interaction = null;
            this.Text22.Margins = new Stimulsoft.Report.Components.StiMargins(0, 0, 0, 0);
            this.Text22.TextBrush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black);
            this.Text22.TextOptions = new Stimulsoft.Base.Drawing.StiTextOptions(false, false, false, 0F, System.Drawing.Text.HotkeyPrefix.None, System.Drawing.StringTrimming.None);
            // 
            // Text23
            // 
            this.Text23 = new Stimulsoft.Report.Components.StiText();
            this.Text23.ClientRectangle = new Stimulsoft.Base.Drawing.RectangleD(7, 0.5, 3.9, 0.4);
            this.Text23.HorAlignment = Stimulsoft.Base.Drawing.StiTextHorAlignment.Center;
            this.Text23.Name = "Text23";
            this.Text23.GetValue += new Stimulsoft.Report.Events.StiGetValueEventHandler(this.Text23__GetValue);
            this.Text23.Type = Stimulsoft.Report.Components.StiSystemTextType.Expression;
            this.Text23.VertAlignment = Stimulsoft.Base.Drawing.StiVertAlignment.Center;
            this.Text23.Border = new Stimulsoft.Base.Drawing.StiBorder(Stimulsoft.Base.Drawing.StiBorderSides.None, System.Drawing.Color.Black, 1, Stimulsoft.Base.Drawing.StiPenStyle.Solid, false, 4, new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black), false);
            this.Text23.Brush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Transparent);
            this.Text23.Font = new System.Drawing.Font("Times New Roman", 14F, System.Drawing.FontStyle.Bold);
            this.Text23.Indicator = null;
            this.Text23.Interaction = null;
            this.Text23.Margins = new Stimulsoft.Report.Components.StiMargins(0, 0, 0, 0);
            this.Text23.TextBrush = new Stimulsoft.Base.Drawing.StiSolidBrush(System.Drawing.Color.Black);
            this.Text23.TextOptions = new Stimulsoft.Base.Drawing.StiTextOptions(false, false, false, 0F, System.Drawing.Text.HotkeyPrefix.None, System.Drawing.StringTrimming.None);
            this.ReportSummaryBand1.Interaction = null;
            this.Page1.Interaction = null;
            this.Page1.Margins = new Stimulsoft.Report.Components.StiMargins(0.39, 0.39, 0.39, 0.39);
            this.Page1.Report = this;
            this.ReportTitleBand1.Page = this.Page1;
            this.ReportTitleBand1.Parent = this.Page1;
            this.Text19.Page = this.Page1;
            this.Text19.Parent = this.ReportTitleBand1;
            this.Text20.Page = this.Page1;
            this.Text20.Parent = this.ReportTitleBand1;
            this.ColumnHeaderBand1.Page = this.Page1;
            this.ColumnHeaderBand1.Parent = this.Page1;
            this.Text1.Page = this.Page1;
            this.Text1.Parent = this.ColumnHeaderBand1;
            this.Text2.Page = this.Page1;
            this.Text2.Parent = this.ColumnHeaderBand1;
            this.Text3.Page = this.Page1;
            this.Text3.Parent = this.ColumnHeaderBand1;
            this.Text4.Page = this.Page1;
            this.Text4.Parent = this.ColumnHeaderBand1;
            this.Text5.Page = this.Page1;
            this.Text5.Parent = this.ColumnHeaderBand1;
            this.Text6.Page = this.Page1;
            this.Text6.Parent = this.ColumnHeaderBand1;
            this.Text7.Page = this.Page1;
            this.Text7.Parent = this.ColumnHeaderBand1;
            this.Text8.Page = this.Page1;
            this.Text8.Parent = this.ColumnHeaderBand1;
            this.Text9.Page = this.Page1;
            this.Text9.Parent = this.ColumnHeaderBand1;
            this.DataBand1.Page = this.Page1;
            this.DataBand1.Parent = this.Page1;
            this.Text10.Page = this.Page1;
            this.Text10.Parent = this.DataBand1;
            this.Text11.Page = this.Page1;
            this.Text11.Parent = this.DataBand1;
            this.Text12.Page = this.Page1;
            this.Text12.Parent = this.DataBand1;
            this.Text13.Page = this.Page1;
            this.Text13.Parent = this.DataBand1;
            this.Text14.Page = this.Page1;
            this.Text14.Parent = this.DataBand1;
            this.Text15.Page = this.Page1;
            this.Text15.Parent = this.DataBand1;
            this.Text16.Page = this.Page1;
            this.Text16.Parent = this.DataBand1;
            this.Text17.Page = this.Page1;
            this.Text17.Parent = this.DataBand1;
            this.Text18.Page = this.Page1;
            this.Text18.Parent = this.DataBand1;
            this.ReportSummaryBand1.Page = this.Page1;
            this.ReportSummaryBand1.Parent = this.Page1;
            this.Text21.Page = this.Page1;
            this.Text21.Parent = this.ReportSummaryBand1;
            this.Text22.Page = this.Page1;
            this.Text22.Parent = this.ReportSummaryBand1;
            this.Text23.Page = this.Page1;
            this.Text23.Parent = this.ReportSummaryBand1;
            this.EndRender += new System.EventHandler(this.CheckEndRenderRuntimes__EndRender);
            // 
            // Add to ReportTitleBand1.Components
            // 
            this.ReportTitleBand1.Components.Clear();
            this.ReportTitleBand1.Components.AddRange(new Stimulsoft.Report.Components.StiComponent[] {
                        this.Text19,
                        this.Text20});
            // 
            // Add to ColumnHeaderBand1.Components
            // 
            this.ColumnHeaderBand1.Components.Clear();
            this.ColumnHeaderBand1.Components.AddRange(new Stimulsoft.Report.Components.StiComponent[] {
                        this.Text1,
                        this.Text2,
                        this.Text3,
                        this.Text4,
                        this.Text5,
                        this.Text6,
                        this.Text7,
                        this.Text8,
                        this.Text9});
            // 
            // Add to DataBand1.Components
            // 
            this.DataBand1.Components.Clear();
            this.DataBand1.Components.AddRange(new Stimulsoft.Report.Components.StiComponent[] {
                        this.Text10,
                        this.Text11,
                        this.Text12,
                        this.Text13,
                        this.Text14,
                        this.Text15,
                        this.Text16,
                        this.Text17,
                        this.Text18});
            // 
            // Add to ReportSummaryBand1.Components
            // 
            this.ReportSummaryBand1.Components.Clear();
            this.ReportSummaryBand1.Components.AddRange(new Stimulsoft.Report.Components.StiComponent[] {
                        this.Text21,
                        this.Text22,
                        this.Text23});
            // 
            // Add to Page1.Components
            // 
            this.Page1.Components.Clear();
            this.Page1.Components.AddRange(new Stimulsoft.Report.Components.StiComponent[] {
                        this.ReportTitleBand1,
                        this.ColumnHeaderBand1,
                        this.DataBand1,
                        this.ReportSummaryBand1});
            // 
            // Add to Pages
            // 
            this.Pages.Clear();
            this.Pages.AddRange(new Stimulsoft.Report.Components.StiPage[] {
                        this.Page1});
            this.p_xemdanhsach_baocaodanhgia.Columns.AddRange(new Stimulsoft.Report.Dictionary.StiDataColumn[] {
                        new Stimulsoft.Report.Dictionary.StiDataColumn("hoten", "hoten", "hoten", typeof(string), "80f23dd3d2af416bbe72f08613105153"),
                        new Stimulsoft.Report.Dictionary.StiDataColumn("tg_batso", "tg_batso", "tg_batso", typeof(string), "3a168a3ac130470f8b494da8dc0860c7"),
                        new Stimulsoft.Report.Dictionary.StiDataColumn("tg_danhgia", "tg_danhgia", "tg_danhgia", typeof(string), "0273d10f93b14be88bc0a620c0549dea"),
                        new Stimulsoft.Report.Dictionary.StiDataColumn("stt_danhgia", "stt_danhgia", "stt_danhgia", typeof(int), "da07389b1a464bda95117116408bb3c5"),
                        new Stimulsoft.Report.Dictionary.StiDataColumn("noidung_dg", "noidung_dg", "noidung_dg", typeof(string), "4f61e949ea244c4faa9404358dcfea48"),
                        new Stimulsoft.Report.Dictionary.StiDataColumn("cot_a", "cot_a", "cot_a", typeof(string), "f33d1c42822c423c817abb390d0a1578"),
                        new Stimulsoft.Report.Dictionary.StiDataColumn("cot_b", "cot_b", "cot_b", typeof(string), "c37f3f45fa9e415b96846d0e165476a8"),
                        new Stimulsoft.Report.Dictionary.StiDataColumn("cot_c", "cot_c", "cot_c", typeof(string), "0f075eb1dd3543c98375f215f45e46c7"),
                        new Stimulsoft.Report.Dictionary.StiDataColumn("cot_d", "cot_d", "cot_d", typeof(string), "62bf1048a33b426fbba84c5ccc6d5092"),
                        new Stimulsoft.Report.Dictionary.StiDataColumn("cot_e", "cot_e", "cot_e", typeof(string), "9f7660d1356e40d78bd87de05ad4ceef"),
                        new Stimulsoft.Report.Dictionary.StiDataColumn("danhgia", "danhgia", "danhgia", typeof(string), "98ac96ac7aeb4f6188a35b4018c00e6f"),
                        new Stimulsoft.Report.Dictionary.StiDataColumn("ngayin", "ngayin", "ngayin", typeof(string), "59c3b8521c0146adb2a5828f014d3449")});
            this.p_xemdanhsach_baocaodanhgia.Parameters.AddRange(new Stimulsoft.Report.Dictionary.StiDataParameter[] {
                        new Stimulsoft.Report.Dictionary.StiDataParameter("@p_tungay", 253, 0, null),
                        new Stimulsoft.Report.Dictionary.StiDataParameter("@p_denngay", 253, 0, null),
                        new Stimulsoft.Report.Dictionary.StiDataParameter("@p_madonvi", 253, 0, null),
                        new Stimulsoft.Report.Dictionary.StiDataParameter("@p_nhanvien", 253, 0, null)});
            this.DataSources.Add(this.p_xemdanhsach_baocaodanhgia);
            this.Dictionary.Databases.Add(new Stimulsoft.Report.Dictionary.StiMySqlDatabase("layykien", "layykien", "#%#", false, "8258d9cca01242af93d9b4b7b6d852f3"));
            ((Stimulsoft.Report.Dictionary.StiSqlDatabase)(this.Dictionary.Databases["layykien"])).ConnectionStringEncrypted = "49Dha81BWt37X5zMTwCkP4tUm8NmXamk7Ef98eUNtRPCyPuI5wUxgGt+0KVmDXdy1GDzK2QJ0x3iSdXA";
            this.p_xemdanhsach_baocaodanhgia.Connecting += new System.EventHandler(this.Getp_xemdanhsach_baocaodanhgia_SqlCommand);
        }
        
        public void Getp_xemdanhsach_baocaodanhgia_SqlCommand(object sender, System.EventArgs e)
        {
            this.p_xemdanhsach_baocaodanhgia.SqlCommand = "call p_xemdanhsach_baocaodanhgia(\'" + ToString(tungay) + "\',\'" + ToString(denngay) + "\',\'" + ToString(madonvi) + "\',\'" + ToString(manhanvien) + "\');";
        }
        
        #region DataSource p_xemdanhsach_baocaodanhgia
        public class p_xemdanhsach_baocaodanhgiaDataSource : Stimulsoft.Report.Dictionary.StiMySqlSource
        {
            
            public p_xemdanhsach_baocaodanhgiaDataSource() : 
                    base("layykien", "p_xemdanhsach_baocaodanhgia", "p_xemdanhsach_baocaodanhgia", "", true, false, 30, "5714cfd396234c7984e038091dc70b1e")
            {
            }
            
            public virtual string hoten
            {
                get
                {
                    return ((string)(StiReport.ChangeType(this["hoten"], typeof(string), true)));
                }
            }
            
            public virtual string tg_batso
            {
                get
                {
                    return ((string)(StiReport.ChangeType(this["tg_batso"], typeof(string), true)));
                }
            }
            
            public virtual string tg_danhgia
            {
                get
                {
                    return ((string)(StiReport.ChangeType(this["tg_danhgia"], typeof(string), true)));
                }
            }
            
            public virtual int stt_danhgia
            {
                get
                {
                    return ((int)(StiReport.ChangeType(this["stt_danhgia"], typeof(int), true)));
                }
            }
            
            public virtual string noidung_dg
            {
                get
                {
                    return ((string)(StiReport.ChangeType(this["noidung_dg"], typeof(string), true)));
                }
            }
            
            public virtual string cot_a
            {
                get
                {
                    return ((string)(StiReport.ChangeType(this["cot_a"], typeof(string), true)));
                }
            }
            
            public virtual string cot_b
            {
                get
                {
                    return ((string)(StiReport.ChangeType(this["cot_b"], typeof(string), true)));
                }
            }
            
            public virtual string cot_c
            {
                get
                {
                    return ((string)(StiReport.ChangeType(this["cot_c"], typeof(string), true)));
                }
            }
            
            public virtual string cot_d
            {
                get
                {
                    return ((string)(StiReport.ChangeType(this["cot_d"], typeof(string), true)));
                }
            }
            
            public virtual string cot_e
            {
                get
                {
                    return ((string)(StiReport.ChangeType(this["cot_e"], typeof(string), true)));
                }
            }
            
            public virtual string danhgia
            {
                get
                {
                    return ((string)(StiReport.ChangeType(this["danhgia"], typeof(string), true)));
                }
            }
            
            public virtual string ngayin
            {
                get
                {
                    return ((string)(StiReport.ChangeType(this["ngayin"], typeof(string), true)));
                }
            }
        }
        #endregion DataSource p_xemdanhsach_baocaodanhgia
        #endregion StiReport Designer generated code - do not modify
    }
}
