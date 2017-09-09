Public Class Form1

	Private Sub Form1_Load(sender As Object, e As EventArgs) Handles MyBase.Load
		With iGrid1
			.Cols.Count = 2
			.Rows.Count = 5

			.Cells(0, 0).Value = "abc"
			.Cells(1, 0).Value = 123

			With .Cells(0, 1)
				.Value = DateTime.Now
				.FormatString = "{0:D}"
				.ForeColor = Color.Red
			End With

			.Cols(1).AutoWidth()
		End With
	End Sub

End Class
