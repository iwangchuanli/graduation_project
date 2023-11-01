package cn.jxc.excel;

import java.text.ParseException;
import java.util.Date;

import org.apache.commons.lang3.time.DateFormatUtils;

public class DateUtils extends org.apache.commons.lang3.time.DateUtils {
    private static String[] parsePatterns = {
            "yyyy-MM-dd", "yyyy-MM-dd HH:mm:ss", "yyyy-MM-dd HH:mm", "yyyy-MM",
            "yyyy/MM/dd", "yyyy/MM/dd HH:mm:ss", "yyyy/MM/dd HH:mm", "yyyy/MM",
            "yyyy.MM.dd", "yyyy.MM.dd HH:mm:ss", "yyyy.MM.dd HH:mm", "yyyy.MM"};

    /**
     * 寰楀埌褰撳墠鏃ユ湡瀛楃涓? 鏍煎紡锛坹yyy-MM-dd锛?
     */
    public static String getDate() {
        return getDate("yyyy-MM-dd");
    }

    /**
     * 寰楀埌褰撳墠鏃ユ湡瀛楃涓? 鏍煎紡锛坹yyy-MM-dd锛? pattern鍙互涓猴細"yyyy-MM-dd" "HH:mm:ss" "E"
     */
    public static String getDate(String pattern) {
        return DateFormatUtils.format(new Date(), pattern);
    }

    /**
     * 寰楀埌鏃ユ湡瀛楃涓? 榛樿鏍煎紡锛坹yyy-MM-dd锛? pattern鍙互涓猴細"yyyy-MM-dd" "HH:mm:ss" "E"
     */
    public static String formatDate(Date date, Object... pattern) {
        String formatDate = null;
        if (pattern != null && pattern.length > 0) {
            formatDate = DateFormatUtils.format(date, pattern[0].toString());
        } else {
            formatDate = DateFormatUtils.format(date, "yyyy-MM-dd");
        }
        return formatDate;
    }

    /**
     * 寰楀埌鏃ユ湡鏃堕棿瀛楃涓诧紝杞崲鏍煎紡锛坹yyy-MM-dd HH:mm:ss锛?
     */
    public static String formatDateTime(Date date) {
        return formatDate(date, "yyyy-MM-dd HH:mm:ss");
    }

    /**
     * 寰楀埌褰撳墠鏃堕棿瀛楃涓? 鏍煎紡锛圚H:mm:ss锛?
     */
    public static String getTime() {
        return formatDate(new Date(), "HH:mm:ss");
    }

    /**
     * 寰楀埌褰撳墠鏃ユ湡鍜屾椂闂村瓧绗︿覆 鏍煎紡锛坹yyy-MM-dd HH:mm:ss锛?
     */
    public static String getDateTime() {
        return formatDate(new Date(), "yyyy-MM-dd HH:mm:ss");
    }

    /**
     * 寰楀埌褰撳墠骞翠唤瀛楃涓? 鏍煎紡锛坹yyy锛?
     */
    public static String getYear() {
        return formatDate(new Date(), "yyyy");
    }

    /**
     * 寰楀埌褰撳墠鏈堜唤瀛楃涓? 鏍煎紡锛圡M锛?
     */
    public static String getMonth() {
        return formatDate(new Date(), "MM");
    }

    /**
     * 寰楀埌褰撳ぉ瀛楃涓? 鏍煎紡锛坉d锛?
     */
    public static String getDay() {
        return formatDate(new Date(), "dd");
    }

    /**
     * 寰楀埌褰撳墠鏄熸湡瀛楃涓? 鏍煎紡锛圗锛夋槦鏈熷嚑
     */
    public static String getWeek() {
        return formatDate(new Date(), "E");
    }

    /**
     * 鏃ユ湡鍨嬪瓧绗︿覆杞寲涓烘棩鏈? 鏍煎紡
     * { "yyyy-MM-dd", "yyyy-MM-dd HH:mm:ss", "yyyy-MM-dd HH:mm",
     *   "yyyy/MM/dd", "yyyy/MM/dd HH:mm:ss", "yyyy/MM/dd HH:mm",
     *   "yyyy.MM.dd", "yyyy.MM.dd HH:mm:ss", "yyyy.MM.dd HH:mm" }
     */
    public static Date parseDate(Object str) {
        if (str == null){
            return null;
        }
        try {
            return parseDate(str.toString(), parsePatterns);
        } catch (ParseException e) {
            return null;
        }
    }

    /**
     * 鑾峰彇杩囧幓鐨勫ぉ鏁?
     * @param date
     * @return
     */
    public static long pastDays(Date date) {
        long t = new Date().getTime()-date.getTime();
        return t/(24*60*60*1000);
    }

    /**
     * 鑾峰彇杩囧幓鐨勫皬鏃?
     * @param date
     * @return
     */
    public static long pastHour(Date date) {
        long t = new Date().getTime()-date.getTime();
        return t/(60*60*1000);
    }

    /**
     * 鑾峰彇杩囧幓鐨勫垎閽?
     * @param date
     * @return
     */
    public static long pastMinutes(Date date) {
        long t = new Date().getTime()-date.getTime();
        return t/(60*1000);
    }

    /**
     * 杞崲涓烘椂闂达紙澶?,鏃?:鍒?:绉?.姣锛?
     * @param timeMillis
     * @return
     */
    public static String formatDateTime(long timeMillis){
        long day = timeMillis/(24*60*60*1000);
        long hour = (timeMillis/(60*60*1000)-day*24);
        long min = ((timeMillis/(60*1000))-day*24*60-hour*60);
        long s = (timeMillis/1000-day*24*60*60-hour*60*60-min*60);
        long sss = (timeMillis-day*24*60*60*1000-hour*60*60*1000-min*60*1000-s*1000);
        return (day>0?day+",":"")+hour+":"+min+":"+s+"."+sss;
    }

    /**
     * 鑾峰彇涓や釜鏃ユ湡涔嬮棿鐨勫ぉ鏁?
     *
     * @param before
     * @param after
     * @return
     */
    public static double getDistanceOfTwoDate(Date before, Date after) {
        long beforeTime = before.getTime();
        long afterTime = after.getTime();
        return (afterTime - beforeTime) / (1000 * 60 * 60 * 24);
    }
}
