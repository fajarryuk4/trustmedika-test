import java.util.Arrays;

class LCSV
{
	// Function to find the value of longest same sub array
	static int[] FindLCSV(int A[], int B[])
	{
	    int m = A.length, n = B.length, maxm = 0, cA = 0;;
		int[][] dp = new int[n + 1][m + 1];
		
		// Updating the dp[][] table
		// in Bottom Up approach
		for (int i = n - 1; i >= 0; i--)
		{
			for (int j = m - 1; j >= 0; j--)
			{
				if (A[i] == B[j]) 
				{
					dp[i][j] = dp[i + 1][j + 1] + 1;
					
					// Find index of maximum of all the values 
					if (dp[i][j] > maxm) cA = i;
					
					// Find maximum of all the values
					// in dp[][] array to get the
					// maximum length
					maxm = Math.max(maxm, dp[i][j]);
				}
			}
		}
		
		// Get result value of same subarray
		int result[] = new int[maxm];
		
        for (int k = 0; k < maxm; k++)
        {
            result[k] = A[cA+k];
        }

		return result;
	}

	// Main Func
	public static void main(String[] args)
	{
		int A[] = { 1, 2, 8, 2, 1 };
		int B[] = { 8, 2, 1, 4, 7 };

        // int A[] = {2,3,4,5,6,7,8};
        // int B[] = {6,7,8,4,5,2,3};
        
        // int A[] = {3, 5, 4, 6, 12, 4, 2, 7, 3};
        // int B[] = {3, 1, 12, 4, 2, 9, 0, 11, 2};

		// Function call to find
		// same subarray value of two array
		System.out.print(Arrays.toString(FindLCSV(A, B)));
	}
}