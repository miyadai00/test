

import java.io.IOException;
import java.io.PrintWriter;
import java.sql.Connection;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;


@WebServlet("/MySQLServlet")
public class MySQLServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;


    public MySQLServlet() {
        super();

    }


	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		request.setCharacterEncoding("UTF-8");
		response.setContentType("text/html; charset=UTF-8");

		PrintWriter out = response.getWriter();

		out.println("<html>");
		out.println("</html>");
		out.println("</html>");
		out.println("<body>");

		Connection con =null;
		String url ="jdbc;mysql://localhost/testdb";
		String user ="root";
		String password="mysql";
	}
	}



