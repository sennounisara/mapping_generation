<?php


/**
 * Base class that represents a query for the 'EntrepriseInsee' table.
 *
 * 
 *
 * @method CommonEntrepriseInseeQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonEntrepriseInseeQuery orderBySiren($order = Criteria::ASC) Order by the siren column
 * @method CommonEntrepriseInseeQuery orderByRaisonsociale($order = Criteria::ASC) Order by the raisonSociale column
 * @method CommonEntrepriseInseeQuery orderByNbeta($order = Criteria::ASC) Order by the nbEtA column
 * @method CommonEntrepriseInseeQuery orderByEtat($order = Criteria::ASC) Order by the etat column
 * @method CommonEntrepriseInseeQuery orderByEtatlib($order = Criteria::ASC) Order by the etatLib column
 * @method CommonEntrepriseInseeQuery orderByEtatdebdate($order = Criteria::ASC) Order by the etatDebDate column
 * @method CommonEntrepriseInseeQuery orderByEff3112tr($order = Criteria::ASC) Order by the eff3112Tr column
 * @method CommonEntrepriseInseeQuery orderByEff3112trlib($order = Criteria::ASC) Order by the eff3112TrLib column
 * @method CommonEntrepriseInseeQuery orderByEffan($order = Criteria::ASC) Order by the effAn column
 * @method CommonEntrepriseInseeQuery orderByApen($order = Criteria::ASC) Order by the apen column
 * @method CommonEntrepriseInseeQuery orderByApenlib($order = Criteria::ASC) Order by the apenLib column
 * @method CommonEntrepriseInseeQuery orderByCj($order = Criteria::ASC) Order by the cj column
 * @method CommonEntrepriseInseeQuery orderByCjlib($order = Criteria::ASC) Order by the cjLib column
 * @method CommonEntrepriseInseeQuery orderByIndndc($order = Criteria::ASC) Order by the indNDC column
 * @method CommonEntrepriseInseeQuery orderByInddoublon($order = Criteria::ASC) Order by the indDoublon column
 * @method CommonEntrepriseInseeQuery orderByIndpurge($order = Criteria::ASC) Order by the indPurge column
 * @method CommonEntrepriseInseeQuery orderByNicsiege($order = Criteria::ASC) Order by the nicSiege column
 * @method CommonEntrepriseInseeQuery orderByEtatsiege($order = Criteria::ASC) Order by the etatSiege column
 * @method CommonEntrepriseInseeQuery orderByEtatsiegelib($order = Criteria::ASC) Order by the etatSiegeLib column
 * @method CommonEntrepriseInseeQuery orderByEtatdebdatesiege($order = Criteria::ASC) Order by the etatDebDateSiege column
 * @method CommonEntrepriseInseeQuery orderByEff3112trsiege($order = Criteria::ASC) Order by the eff3112TrSiege column
 * @method CommonEntrepriseInseeQuery orderByEff3112trsiegelib($order = Criteria::ASC) Order by the eff3112TrSiegeLib column
 * @method CommonEntrepriseInseeQuery orderByEffansiege($order = Criteria::ASC) Order by the effAnSiege column
 * @method CommonEntrepriseInseeQuery orderByApetsiege($order = Criteria::ASC) Order by the apetSiege column
 * @method CommonEntrepriseInseeQuery orderByApetsiegelib($order = Criteria::ASC) Order by the apetSiegeLib column
 * @method CommonEntrepriseInseeQuery orderByTrtderdatesiege($order = Criteria::ASC) Order by the trtDerDateSiege column
 * @method CommonEntrepriseInseeQuery orderByAdretvoienum($order = Criteria::ASC) Order by the adrEtVoieNum column
 * @method CommonEntrepriseInseeQuery orderByAdretvoietype($order = Criteria::ASC) Order by the adrEtVoieType column
 * @method CommonEntrepriseInseeQuery orderByAdretvoielib($order = Criteria::ASC) Order by the adrEtVoieLib column
 * @method CommonEntrepriseInseeQuery orderByAdretdepcom($order = Criteria::ASC) Order by the adrEtDepCom column
 * @method CommonEntrepriseInseeQuery orderByAdretcomlib($order = Criteria::ASC) Order by the adrEtComLib column
 * @method CommonEntrepriseInseeQuery orderByAdretcodepost($order = Criteria::ASC) Order by the adrEtCodePost column
 * @method CommonEntrepriseInseeQuery orderByAdretpost1($order = Criteria::ASC) Order by the adrEtPost1 column
 * @method CommonEntrepriseInseeQuery orderByAdretpost2($order = Criteria::ASC) Order by the adrEtPost2 column
 * @method CommonEntrepriseInseeQuery orderByAdretpost3($order = Criteria::ASC) Order by the adrEtPost3 column
 * @method CommonEntrepriseInseeQuery orderByNic($order = Criteria::ASC) Order by the nic column
 * @method CommonEntrepriseInseeQuery orderByEtatet($order = Criteria::ASC) Order by the etatEt column
 * @method CommonEntrepriseInseeQuery orderByEtatdebdateet($order = Criteria::ASC) Order by the etatDebDateEt column
 * @method CommonEntrepriseInseeQuery orderByCatet($order = Criteria::ASC) Order by the catEt column
 * @method CommonEntrepriseInseeQuery orderByCatetlib($order = Criteria::ASC) Order by the catEtLib column
 * @method CommonEntrepriseInseeQuery orderByEff3112tret($order = Criteria::ASC) Order by the eff3112TrEt column
 * @method CommonEntrepriseInseeQuery orderByEff3112tretlib($order = Criteria::ASC) Order by the eff3112TrEtLib column
 * @method CommonEntrepriseInseeQuery orderByEffanet($order = Criteria::ASC) Order by the effAnEt column
 * @method CommonEntrepriseInseeQuery orderByApet($order = Criteria::ASC) Order by the apet column
 * @method CommonEntrepriseInseeQuery orderByApetlib($order = Criteria::ASC) Order by the apetLib column
 * @method CommonEntrepriseInseeQuery orderByTrtderdateet($order = Criteria::ASC) Order by the trtDerDateEt column
 * @method CommonEntrepriseInseeQuery orderByEtatetlib($order = Criteria::ASC) Order by the etatEtLib column
 *
 * @method CommonEntrepriseInseeQuery groupById() Group by the id column
 * @method CommonEntrepriseInseeQuery groupBySiren() Group by the siren column
 * @method CommonEntrepriseInseeQuery groupByRaisonsociale() Group by the raisonSociale column
 * @method CommonEntrepriseInseeQuery groupByNbeta() Group by the nbEtA column
 * @method CommonEntrepriseInseeQuery groupByEtat() Group by the etat column
 * @method CommonEntrepriseInseeQuery groupByEtatlib() Group by the etatLib column
 * @method CommonEntrepriseInseeQuery groupByEtatdebdate() Group by the etatDebDate column
 * @method CommonEntrepriseInseeQuery groupByEff3112tr() Group by the eff3112Tr column
 * @method CommonEntrepriseInseeQuery groupByEff3112trlib() Group by the eff3112TrLib column
 * @method CommonEntrepriseInseeQuery groupByEffan() Group by the effAn column
 * @method CommonEntrepriseInseeQuery groupByApen() Group by the apen column
 * @method CommonEntrepriseInseeQuery groupByApenlib() Group by the apenLib column
 * @method CommonEntrepriseInseeQuery groupByCj() Group by the cj column
 * @method CommonEntrepriseInseeQuery groupByCjlib() Group by the cjLib column
 * @method CommonEntrepriseInseeQuery groupByIndndc() Group by the indNDC column
 * @method CommonEntrepriseInseeQuery groupByInddoublon() Group by the indDoublon column
 * @method CommonEntrepriseInseeQuery groupByIndpurge() Group by the indPurge column
 * @method CommonEntrepriseInseeQuery groupByNicsiege() Group by the nicSiege column
 * @method CommonEntrepriseInseeQuery groupByEtatsiege() Group by the etatSiege column
 * @method CommonEntrepriseInseeQuery groupByEtatsiegelib() Group by the etatSiegeLib column
 * @method CommonEntrepriseInseeQuery groupByEtatdebdatesiege() Group by the etatDebDateSiege column
 * @method CommonEntrepriseInseeQuery groupByEff3112trsiege() Group by the eff3112TrSiege column
 * @method CommonEntrepriseInseeQuery groupByEff3112trsiegelib() Group by the eff3112TrSiegeLib column
 * @method CommonEntrepriseInseeQuery groupByEffansiege() Group by the effAnSiege column
 * @method CommonEntrepriseInseeQuery groupByApetsiege() Group by the apetSiege column
 * @method CommonEntrepriseInseeQuery groupByApetsiegelib() Group by the apetSiegeLib column
 * @method CommonEntrepriseInseeQuery groupByTrtderdatesiege() Group by the trtDerDateSiege column
 * @method CommonEntrepriseInseeQuery groupByAdretvoienum() Group by the adrEtVoieNum column
 * @method CommonEntrepriseInseeQuery groupByAdretvoietype() Group by the adrEtVoieType column
 * @method CommonEntrepriseInseeQuery groupByAdretvoielib() Group by the adrEtVoieLib column
 * @method CommonEntrepriseInseeQuery groupByAdretdepcom() Group by the adrEtDepCom column
 * @method CommonEntrepriseInseeQuery groupByAdretcomlib() Group by the adrEtComLib column
 * @method CommonEntrepriseInseeQuery groupByAdretcodepost() Group by the adrEtCodePost column
 * @method CommonEntrepriseInseeQuery groupByAdretpost1() Group by the adrEtPost1 column
 * @method CommonEntrepriseInseeQuery groupByAdretpost2() Group by the adrEtPost2 column
 * @method CommonEntrepriseInseeQuery groupByAdretpost3() Group by the adrEtPost3 column
 * @method CommonEntrepriseInseeQuery groupByNic() Group by the nic column
 * @method CommonEntrepriseInseeQuery groupByEtatet() Group by the etatEt column
 * @method CommonEntrepriseInseeQuery groupByEtatdebdateet() Group by the etatDebDateEt column
 * @method CommonEntrepriseInseeQuery groupByCatet() Group by the catEt column
 * @method CommonEntrepriseInseeQuery groupByCatetlib() Group by the catEtLib column
 * @method CommonEntrepriseInseeQuery groupByEff3112tret() Group by the eff3112TrEt column
 * @method CommonEntrepriseInseeQuery groupByEff3112tretlib() Group by the eff3112TrEtLib column
 * @method CommonEntrepriseInseeQuery groupByEffanet() Group by the effAnEt column
 * @method CommonEntrepriseInseeQuery groupByApet() Group by the apet column
 * @method CommonEntrepriseInseeQuery groupByApetlib() Group by the apetLib column
 * @method CommonEntrepriseInseeQuery groupByTrtderdateet() Group by the trtDerDateEt column
 * @method CommonEntrepriseInseeQuery groupByEtatetlib() Group by the etatEtLib column
 *
 * @method CommonEntrepriseInseeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonEntrepriseInseeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonEntrepriseInseeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonEntrepriseInsee findOne(PropelPDO $con = null) Return the first CommonEntrepriseInsee matching the query
 * @method CommonEntrepriseInsee findOneOrCreate(PropelPDO $con = null) Return the first CommonEntrepriseInsee matching the query, or a new CommonEntrepriseInsee object populated from the query conditions when no match is found
 *
 * @method CommonEntrepriseInsee findOneBySiren(string $siren) Return the first CommonEntrepriseInsee filtered by the siren column
 * @method CommonEntrepriseInsee findOneByRaisonsociale(string $raisonSociale) Return the first CommonEntrepriseInsee filtered by the raisonSociale column
 * @method CommonEntrepriseInsee findOneByNbeta(int $nbEtA) Return the first CommonEntrepriseInsee filtered by the nbEtA column
 * @method CommonEntrepriseInsee findOneByEtat(string $etat) Return the first CommonEntrepriseInsee filtered by the etat column
 * @method CommonEntrepriseInsee findOneByEtatlib(string $etatLib) Return the first CommonEntrepriseInsee filtered by the etatLib column
 * @method CommonEntrepriseInsee findOneByEtatdebdate(string $etatDebDate) Return the first CommonEntrepriseInsee filtered by the etatDebDate column
 * @method CommonEntrepriseInsee findOneByEff3112tr(int $eff3112Tr) Return the first CommonEntrepriseInsee filtered by the eff3112Tr column
 * @method CommonEntrepriseInsee findOneByEff3112trlib(string $eff3112TrLib) Return the first CommonEntrepriseInsee filtered by the eff3112TrLib column
 * @method CommonEntrepriseInsee findOneByEffan(string $effAn) Return the first CommonEntrepriseInsee filtered by the effAn column
 * @method CommonEntrepriseInsee findOneByApen(string $apen) Return the first CommonEntrepriseInsee filtered by the apen column
 * @method CommonEntrepriseInsee findOneByApenlib(string $apenLib) Return the first CommonEntrepriseInsee filtered by the apenLib column
 * @method CommonEntrepriseInsee findOneByCj(string $cj) Return the first CommonEntrepriseInsee filtered by the cj column
 * @method CommonEntrepriseInsee findOneByCjlib(string $cjLib) Return the first CommonEntrepriseInsee filtered by the cjLib column
 * @method CommonEntrepriseInsee findOneByIndndc(string $indNDC) Return the first CommonEntrepriseInsee filtered by the indNDC column
 * @method CommonEntrepriseInsee findOneByInddoublon(string $indDoublon) Return the first CommonEntrepriseInsee filtered by the indDoublon column
 * @method CommonEntrepriseInsee findOneByIndpurge(string $indPurge) Return the first CommonEntrepriseInsee filtered by the indPurge column
 * @method CommonEntrepriseInsee findOneByNicsiege(string $nicSiege) Return the first CommonEntrepriseInsee filtered by the nicSiege column
 * @method CommonEntrepriseInsee findOneByEtatsiege(string $etatSiege) Return the first CommonEntrepriseInsee filtered by the etatSiege column
 * @method CommonEntrepriseInsee findOneByEtatsiegelib(string $etatSiegeLib) Return the first CommonEntrepriseInsee filtered by the etatSiegeLib column
 * @method CommonEntrepriseInsee findOneByEtatdebdatesiege(string $etatDebDateSiege) Return the first CommonEntrepriseInsee filtered by the etatDebDateSiege column
 * @method CommonEntrepriseInsee findOneByEff3112trsiege(int $eff3112TrSiege) Return the first CommonEntrepriseInsee filtered by the eff3112TrSiege column
 * @method CommonEntrepriseInsee findOneByEff3112trsiegelib(string $eff3112TrSiegeLib) Return the first CommonEntrepriseInsee filtered by the eff3112TrSiegeLib column
 * @method CommonEntrepriseInsee findOneByEffansiege(string $effAnSiege) Return the first CommonEntrepriseInsee filtered by the effAnSiege column
 * @method CommonEntrepriseInsee findOneByApetsiege(string $apetSiege) Return the first CommonEntrepriseInsee filtered by the apetSiege column
 * @method CommonEntrepriseInsee findOneByApetsiegelib(string $apetSiegeLib) Return the first CommonEntrepriseInsee filtered by the apetSiegeLib column
 * @method CommonEntrepriseInsee findOneByTrtderdatesiege(string $trtDerDateSiege) Return the first CommonEntrepriseInsee filtered by the trtDerDateSiege column
 * @method CommonEntrepriseInsee findOneByAdretvoienum(string $adrEtVoieNum) Return the first CommonEntrepriseInsee filtered by the adrEtVoieNum column
 * @method CommonEntrepriseInsee findOneByAdretvoietype(string $adrEtVoieType) Return the first CommonEntrepriseInsee filtered by the adrEtVoieType column
 * @method CommonEntrepriseInsee findOneByAdretvoielib(string $adrEtVoieLib) Return the first CommonEntrepriseInsee filtered by the adrEtVoieLib column
 * @method CommonEntrepriseInsee findOneByAdretdepcom(string $adrEtDepCom) Return the first CommonEntrepriseInsee filtered by the adrEtDepCom column
 * @method CommonEntrepriseInsee findOneByAdretcomlib(string $adrEtComLib) Return the first CommonEntrepriseInsee filtered by the adrEtComLib column
 * @method CommonEntrepriseInsee findOneByAdretcodepost(string $adrEtCodePost) Return the first CommonEntrepriseInsee filtered by the adrEtCodePost column
 * @method CommonEntrepriseInsee findOneByAdretpost1(string $adrEtPost1) Return the first CommonEntrepriseInsee filtered by the adrEtPost1 column
 * @method CommonEntrepriseInsee findOneByAdretpost2(string $adrEtPost2) Return the first CommonEntrepriseInsee filtered by the adrEtPost2 column
 * @method CommonEntrepriseInsee findOneByAdretpost3(string $adrEtPost3) Return the first CommonEntrepriseInsee filtered by the adrEtPost3 column
 * @method CommonEntrepriseInsee findOneByNic(string $nic) Return the first CommonEntrepriseInsee filtered by the nic column
 * @method CommonEntrepriseInsee findOneByEtatet(string $etatEt) Return the first CommonEntrepriseInsee filtered by the etatEt column
 * @method CommonEntrepriseInsee findOneByEtatdebdateet(string $etatDebDateEt) Return the first CommonEntrepriseInsee filtered by the etatDebDateEt column
 * @method CommonEntrepriseInsee findOneByCatet(string $catEt) Return the first CommonEntrepriseInsee filtered by the catEt column
 * @method CommonEntrepriseInsee findOneByCatetlib(string $catEtLib) Return the first CommonEntrepriseInsee filtered by the catEtLib column
 * @method CommonEntrepriseInsee findOneByEff3112tret(string $eff3112TrEt) Return the first CommonEntrepriseInsee filtered by the eff3112TrEt column
 * @method CommonEntrepriseInsee findOneByEff3112tretlib(string $eff3112TrEtLib) Return the first CommonEntrepriseInsee filtered by the eff3112TrEtLib column
 * @method CommonEntrepriseInsee findOneByEffanet(string $effAnEt) Return the first CommonEntrepriseInsee filtered by the effAnEt column
 * @method CommonEntrepriseInsee findOneByApet(string $apet) Return the first CommonEntrepriseInsee filtered by the apet column
 * @method CommonEntrepriseInsee findOneByApetlib(string $apetLib) Return the first CommonEntrepriseInsee filtered by the apetLib column
 * @method CommonEntrepriseInsee findOneByTrtderdateet(string $trtDerDateEt) Return the first CommonEntrepriseInsee filtered by the trtDerDateEt column
 * @method CommonEntrepriseInsee findOneByEtatetlib(string $etatEtLib) Return the first CommonEntrepriseInsee filtered by the etatEtLib column
 *
 * @method array findById(int $id) Return CommonEntrepriseInsee objects filtered by the id column
 * @method array findBySiren(string $siren) Return CommonEntrepriseInsee objects filtered by the siren column
 * @method array findByRaisonsociale(string $raisonSociale) Return CommonEntrepriseInsee objects filtered by the raisonSociale column
 * @method array findByNbeta(int $nbEtA) Return CommonEntrepriseInsee objects filtered by the nbEtA column
 * @method array findByEtat(string $etat) Return CommonEntrepriseInsee objects filtered by the etat column
 * @method array findByEtatlib(string $etatLib) Return CommonEntrepriseInsee objects filtered by the etatLib column
 * @method array findByEtatdebdate(string $etatDebDate) Return CommonEntrepriseInsee objects filtered by the etatDebDate column
 * @method array findByEff3112tr(int $eff3112Tr) Return CommonEntrepriseInsee objects filtered by the eff3112Tr column
 * @method array findByEff3112trlib(string $eff3112TrLib) Return CommonEntrepriseInsee objects filtered by the eff3112TrLib column
 * @method array findByEffan(string $effAn) Return CommonEntrepriseInsee objects filtered by the effAn column
 * @method array findByApen(string $apen) Return CommonEntrepriseInsee objects filtered by the apen column
 * @method array findByApenlib(string $apenLib) Return CommonEntrepriseInsee objects filtered by the apenLib column
 * @method array findByCj(string $cj) Return CommonEntrepriseInsee objects filtered by the cj column
 * @method array findByCjlib(string $cjLib) Return CommonEntrepriseInsee objects filtered by the cjLib column
 * @method array findByIndndc(string $indNDC) Return CommonEntrepriseInsee objects filtered by the indNDC column
 * @method array findByInddoublon(string $indDoublon) Return CommonEntrepriseInsee objects filtered by the indDoublon column
 * @method array findByIndpurge(string $indPurge) Return CommonEntrepriseInsee objects filtered by the indPurge column
 * @method array findByNicsiege(string $nicSiege) Return CommonEntrepriseInsee objects filtered by the nicSiege column
 * @method array findByEtatsiege(string $etatSiege) Return CommonEntrepriseInsee objects filtered by the etatSiege column
 * @method array findByEtatsiegelib(string $etatSiegeLib) Return CommonEntrepriseInsee objects filtered by the etatSiegeLib column
 * @method array findByEtatdebdatesiege(string $etatDebDateSiege) Return CommonEntrepriseInsee objects filtered by the etatDebDateSiege column
 * @method array findByEff3112trsiege(int $eff3112TrSiege) Return CommonEntrepriseInsee objects filtered by the eff3112TrSiege column
 * @method array findByEff3112trsiegelib(string $eff3112TrSiegeLib) Return CommonEntrepriseInsee objects filtered by the eff3112TrSiegeLib column
 * @method array findByEffansiege(string $effAnSiege) Return CommonEntrepriseInsee objects filtered by the effAnSiege column
 * @method array findByApetsiege(string $apetSiege) Return CommonEntrepriseInsee objects filtered by the apetSiege column
 * @method array findByApetsiegelib(string $apetSiegeLib) Return CommonEntrepriseInsee objects filtered by the apetSiegeLib column
 * @method array findByTrtderdatesiege(string $trtDerDateSiege) Return CommonEntrepriseInsee objects filtered by the trtDerDateSiege column
 * @method array findByAdretvoienum(string $adrEtVoieNum) Return CommonEntrepriseInsee objects filtered by the adrEtVoieNum column
 * @method array findByAdretvoietype(string $adrEtVoieType) Return CommonEntrepriseInsee objects filtered by the adrEtVoieType column
 * @method array findByAdretvoielib(string $adrEtVoieLib) Return CommonEntrepriseInsee objects filtered by the adrEtVoieLib column
 * @method array findByAdretdepcom(string $adrEtDepCom) Return CommonEntrepriseInsee objects filtered by the adrEtDepCom column
 * @method array findByAdretcomlib(string $adrEtComLib) Return CommonEntrepriseInsee objects filtered by the adrEtComLib column
 * @method array findByAdretcodepost(string $adrEtCodePost) Return CommonEntrepriseInsee objects filtered by the adrEtCodePost column
 * @method array findByAdretpost1(string $adrEtPost1) Return CommonEntrepriseInsee objects filtered by the adrEtPost1 column
 * @method array findByAdretpost2(string $adrEtPost2) Return CommonEntrepriseInsee objects filtered by the adrEtPost2 column
 * @method array findByAdretpost3(string $adrEtPost3) Return CommonEntrepriseInsee objects filtered by the adrEtPost3 column
 * @method array findByNic(string $nic) Return CommonEntrepriseInsee objects filtered by the nic column
 * @method array findByEtatet(string $etatEt) Return CommonEntrepriseInsee objects filtered by the etatEt column
 * @method array findByEtatdebdateet(string $etatDebDateEt) Return CommonEntrepriseInsee objects filtered by the etatDebDateEt column
 * @method array findByCatet(string $catEt) Return CommonEntrepriseInsee objects filtered by the catEt column
 * @method array findByCatetlib(string $catEtLib) Return CommonEntrepriseInsee objects filtered by the catEtLib column
 * @method array findByEff3112tret(string $eff3112TrEt) Return CommonEntrepriseInsee objects filtered by the eff3112TrEt column
 * @method array findByEff3112tretlib(string $eff3112TrEtLib) Return CommonEntrepriseInsee objects filtered by the eff3112TrEtLib column
 * @method array findByEffanet(string $effAnEt) Return CommonEntrepriseInsee objects filtered by the effAnEt column
 * @method array findByApet(string $apet) Return CommonEntrepriseInsee objects filtered by the apet column
 * @method array findByApetlib(string $apetLib) Return CommonEntrepriseInsee objects filtered by the apetLib column
 * @method array findByTrtderdateet(string $trtDerDateEt) Return CommonEntrepriseInsee objects filtered by the trtDerDateEt column
 * @method array findByEtatetlib(string $etatEtLib) Return CommonEntrepriseInsee objects filtered by the etatEtLib column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonEntrepriseInseeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonEntrepriseInseeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonEntrepriseInsee', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonEntrepriseInseeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonEntrepriseInseeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonEntrepriseInseeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonEntrepriseInseeQuery) {
            return $criteria;
        }
        $query = new CommonEntrepriseInseeQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query 
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonEntrepriseInsee|CommonEntrepriseInsee[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonEntrepriseInseePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonEntrepriseInseePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonEntrepriseInsee A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonEntrepriseInsee A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `siren`, `raisonSociale`, `nbEtA`, `etat`, `etatLib`, `etatDebDate`, `eff3112Tr`, `eff3112TrLib`, `effAn`, `apen`, `apenLib`, `cj`, `cjLib`, `indNDC`, `indDoublon`, `indPurge`, `nicSiege`, `etatSiege`, `etatSiegeLib`, `etatDebDateSiege`, `eff3112TrSiege`, `eff3112TrSiegeLib`, `effAnSiege`, `apetSiege`, `apetSiegeLib`, `trtDerDateSiege`, `adrEtVoieNum`, `adrEtVoieType`, `adrEtVoieLib`, `adrEtDepCom`, `adrEtComLib`, `adrEtCodePost`, `adrEtPost1`, `adrEtPost2`, `adrEtPost3`, `nic`, `etatEt`, `etatDebDateEt`, `catEt`, `catEtLib`, `eff3112TrEt`, `eff3112TrEtLib`, `effAnEt`, `apet`, `apetLib`, `trtDerDateEt`, `etatEtLib` FROM `EntrepriseInsee` WHERE `id` = :p0';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonEntrepriseInsee();
            $obj->hydrate($row);
            CommonEntrepriseInseePeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return CommonEntrepriseInsee|CommonEntrepriseInsee[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonEntrepriseInsee[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonEntrepriseInseePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonEntrepriseInseePeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonEntrepriseInseePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonEntrepriseInseePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the siren column
     *
     * Example usage:
     * <code>
     * $query->filterBySiren('fooValue');   // WHERE siren = 'fooValue'
     * $query->filterBySiren('%fooValue%'); // WHERE siren LIKE '%fooValue%'
     * </code>
     *
     * @param     string $siren The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterBySiren($siren = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($siren)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $siren)) {
                $siren = str_replace('*', '%', $siren);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::SIREN, $siren, $comparison);
    }

    /**
     * Filter the query on the raisonSociale column
     *
     * Example usage:
     * <code>
     * $query->filterByRaisonsociale('fooValue');   // WHERE raisonSociale = 'fooValue'
     * $query->filterByRaisonsociale('%fooValue%'); // WHERE raisonSociale LIKE '%fooValue%'
     * </code>
     *
     * @param     string $raisonsociale The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByRaisonsociale($raisonsociale = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($raisonsociale)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $raisonsociale)) {
                $raisonsociale = str_replace('*', '%', $raisonsociale);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::RAISONSOCIALE, $raisonsociale, $comparison);
    }

    /**
     * Filter the query on the nbEtA column
     *
     * Example usage:
     * <code>
     * $query->filterByNbeta(1234); // WHERE nbEtA = 1234
     * $query->filterByNbeta(array(12, 34)); // WHERE nbEtA IN (12, 34)
     * $query->filterByNbeta(array('min' => 12)); // WHERE nbEtA >= 12
     * $query->filterByNbeta(array('max' => 12)); // WHERE nbEtA <= 12
     * </code>
     *
     * @param     mixed $nbeta The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByNbeta($nbeta = null, $comparison = null)
    {
        if (is_array($nbeta)) {
            $useMinMax = false;
            if (isset($nbeta['min'])) {
                $this->addUsingAlias(CommonEntrepriseInseePeer::NBETA, $nbeta['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nbeta['max'])) {
                $this->addUsingAlias(CommonEntrepriseInseePeer::NBETA, $nbeta['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::NBETA, $nbeta, $comparison);
    }

    /**
     * Filter the query on the etat column
     *
     * Example usage:
     * <code>
     * $query->filterByEtat('fooValue');   // WHERE etat = 'fooValue'
     * $query->filterByEtat('%fooValue%'); // WHERE etat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $etat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByEtat($etat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($etat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $etat)) {
                $etat = str_replace('*', '%', $etat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::ETAT, $etat, $comparison);
    }

    /**
     * Filter the query on the etatLib column
     *
     * Example usage:
     * <code>
     * $query->filterByEtatlib('fooValue');   // WHERE etatLib = 'fooValue'
     * $query->filterByEtatlib('%fooValue%'); // WHERE etatLib LIKE '%fooValue%'
     * </code>
     *
     * @param     string $etatlib The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByEtatlib($etatlib = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($etatlib)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $etatlib)) {
                $etatlib = str_replace('*', '%', $etatlib);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::ETATLIB, $etatlib, $comparison);
    }

    /**
     * Filter the query on the etatDebDate column
     *
     * Example usage:
     * <code>
     * $query->filterByEtatdebdate('fooValue');   // WHERE etatDebDate = 'fooValue'
     * $query->filterByEtatdebdate('%fooValue%'); // WHERE etatDebDate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $etatdebdate The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByEtatdebdate($etatdebdate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($etatdebdate)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $etatdebdate)) {
                $etatdebdate = str_replace('*', '%', $etatdebdate);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::ETATDEBDATE, $etatdebdate, $comparison);
    }

    /**
     * Filter the query on the eff3112Tr column
     *
     * Example usage:
     * <code>
     * $query->filterByEff3112tr(1234); // WHERE eff3112Tr = 1234
     * $query->filterByEff3112tr(array(12, 34)); // WHERE eff3112Tr IN (12, 34)
     * $query->filterByEff3112tr(array('min' => 12)); // WHERE eff3112Tr >= 12
     * $query->filterByEff3112tr(array('max' => 12)); // WHERE eff3112Tr <= 12
     * </code>
     *
     * @param     mixed $eff3112tr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByEff3112tr($eff3112tr = null, $comparison = null)
    {
        if (is_array($eff3112tr)) {
            $useMinMax = false;
            if (isset($eff3112tr['min'])) {
                $this->addUsingAlias(CommonEntrepriseInseePeer::EFF3112TR, $eff3112tr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eff3112tr['max'])) {
                $this->addUsingAlias(CommonEntrepriseInseePeer::EFF3112TR, $eff3112tr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::EFF3112TR, $eff3112tr, $comparison);
    }

    /**
     * Filter the query on the eff3112TrLib column
     *
     * Example usage:
     * <code>
     * $query->filterByEff3112trlib('fooValue');   // WHERE eff3112TrLib = 'fooValue'
     * $query->filterByEff3112trlib('%fooValue%'); // WHERE eff3112TrLib LIKE '%fooValue%'
     * </code>
     *
     * @param     string $eff3112trlib The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByEff3112trlib($eff3112trlib = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($eff3112trlib)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $eff3112trlib)) {
                $eff3112trlib = str_replace('*', '%', $eff3112trlib);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::EFF3112TRLIB, $eff3112trlib, $comparison);
    }

    /**
     * Filter the query on the effAn column
     *
     * Example usage:
     * <code>
     * $query->filterByEffan('fooValue');   // WHERE effAn = 'fooValue'
     * $query->filterByEffan('%fooValue%'); // WHERE effAn LIKE '%fooValue%'
     * </code>
     *
     * @param     string $effan The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByEffan($effan = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($effan)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $effan)) {
                $effan = str_replace('*', '%', $effan);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::EFFAN, $effan, $comparison);
    }

    /**
     * Filter the query on the apen column
     *
     * Example usage:
     * <code>
     * $query->filterByApen('fooValue');   // WHERE apen = 'fooValue'
     * $query->filterByApen('%fooValue%'); // WHERE apen LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apen The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByApen($apen = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apen)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $apen)) {
                $apen = str_replace('*', '%', $apen);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::APEN, $apen, $comparison);
    }

    /**
     * Filter the query on the apenLib column
     *
     * Example usage:
     * <code>
     * $query->filterByApenlib('fooValue');   // WHERE apenLib = 'fooValue'
     * $query->filterByApenlib('%fooValue%'); // WHERE apenLib LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apenlib The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByApenlib($apenlib = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apenlib)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $apenlib)) {
                $apenlib = str_replace('*', '%', $apenlib);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::APENLIB, $apenlib, $comparison);
    }

    /**
     * Filter the query on the cj column
     *
     * Example usage:
     * <code>
     * $query->filterByCj('fooValue');   // WHERE cj = 'fooValue'
     * $query->filterByCj('%fooValue%'); // WHERE cj LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cj The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByCj($cj = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cj)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cj)) {
                $cj = str_replace('*', '%', $cj);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::CJ, $cj, $comparison);
    }

    /**
     * Filter the query on the cjLib column
     *
     * Example usage:
     * <code>
     * $query->filterByCjlib('fooValue');   // WHERE cjLib = 'fooValue'
     * $query->filterByCjlib('%fooValue%'); // WHERE cjLib LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cjlib The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByCjlib($cjlib = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cjlib)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cjlib)) {
                $cjlib = str_replace('*', '%', $cjlib);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::CJLIB, $cjlib, $comparison);
    }

    /**
     * Filter the query on the indNDC column
     *
     * Example usage:
     * <code>
     * $query->filterByIndndc('fooValue');   // WHERE indNDC = 'fooValue'
     * $query->filterByIndndc('%fooValue%'); // WHERE indNDC LIKE '%fooValue%'
     * </code>
     *
     * @param     string $indndc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByIndndc($indndc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($indndc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $indndc)) {
                $indndc = str_replace('*', '%', $indndc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::INDNDC, $indndc, $comparison);
    }

    /**
     * Filter the query on the indDoublon column
     *
     * Example usage:
     * <code>
     * $query->filterByInddoublon('fooValue');   // WHERE indDoublon = 'fooValue'
     * $query->filterByInddoublon('%fooValue%'); // WHERE indDoublon LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inddoublon The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByInddoublon($inddoublon = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inddoublon)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $inddoublon)) {
                $inddoublon = str_replace('*', '%', $inddoublon);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::INDDOUBLON, $inddoublon, $comparison);
    }

    /**
     * Filter the query on the indPurge column
     *
     * Example usage:
     * <code>
     * $query->filterByIndpurge('fooValue');   // WHERE indPurge = 'fooValue'
     * $query->filterByIndpurge('%fooValue%'); // WHERE indPurge LIKE '%fooValue%'
     * </code>
     *
     * @param     string $indpurge The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByIndpurge($indpurge = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($indpurge)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $indpurge)) {
                $indpurge = str_replace('*', '%', $indpurge);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::INDPURGE, $indpurge, $comparison);
    }

    /**
     * Filter the query on the nicSiege column
     *
     * Example usage:
     * <code>
     * $query->filterByNicsiege('fooValue');   // WHERE nicSiege = 'fooValue'
     * $query->filterByNicsiege('%fooValue%'); // WHERE nicSiege LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nicsiege The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByNicsiege($nicsiege = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nicsiege)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nicsiege)) {
                $nicsiege = str_replace('*', '%', $nicsiege);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::NICSIEGE, $nicsiege, $comparison);
    }

    /**
     * Filter the query on the etatSiege column
     *
     * Example usage:
     * <code>
     * $query->filterByEtatsiege('fooValue');   // WHERE etatSiege = 'fooValue'
     * $query->filterByEtatsiege('%fooValue%'); // WHERE etatSiege LIKE '%fooValue%'
     * </code>
     *
     * @param     string $etatsiege The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByEtatsiege($etatsiege = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($etatsiege)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $etatsiege)) {
                $etatsiege = str_replace('*', '%', $etatsiege);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::ETATSIEGE, $etatsiege, $comparison);
    }

    /**
     * Filter the query on the etatSiegeLib column
     *
     * Example usage:
     * <code>
     * $query->filterByEtatsiegelib('fooValue');   // WHERE etatSiegeLib = 'fooValue'
     * $query->filterByEtatsiegelib('%fooValue%'); // WHERE etatSiegeLib LIKE '%fooValue%'
     * </code>
     *
     * @param     string $etatsiegelib The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByEtatsiegelib($etatsiegelib = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($etatsiegelib)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $etatsiegelib)) {
                $etatsiegelib = str_replace('*', '%', $etatsiegelib);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::ETATSIEGELIB, $etatsiegelib, $comparison);
    }

    /**
     * Filter the query on the etatDebDateSiege column
     *
     * Example usage:
     * <code>
     * $query->filterByEtatdebdatesiege('fooValue');   // WHERE etatDebDateSiege = 'fooValue'
     * $query->filterByEtatdebdatesiege('%fooValue%'); // WHERE etatDebDateSiege LIKE '%fooValue%'
     * </code>
     *
     * @param     string $etatdebdatesiege The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByEtatdebdatesiege($etatdebdatesiege = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($etatdebdatesiege)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $etatdebdatesiege)) {
                $etatdebdatesiege = str_replace('*', '%', $etatdebdatesiege);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::ETATDEBDATESIEGE, $etatdebdatesiege, $comparison);
    }

    /**
     * Filter the query on the eff3112TrSiege column
     *
     * Example usage:
     * <code>
     * $query->filterByEff3112trsiege(1234); // WHERE eff3112TrSiege = 1234
     * $query->filterByEff3112trsiege(array(12, 34)); // WHERE eff3112TrSiege IN (12, 34)
     * $query->filterByEff3112trsiege(array('min' => 12)); // WHERE eff3112TrSiege >= 12
     * $query->filterByEff3112trsiege(array('max' => 12)); // WHERE eff3112TrSiege <= 12
     * </code>
     *
     * @param     mixed $eff3112trsiege The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByEff3112trsiege($eff3112trsiege = null, $comparison = null)
    {
        if (is_array($eff3112trsiege)) {
            $useMinMax = false;
            if (isset($eff3112trsiege['min'])) {
                $this->addUsingAlias(CommonEntrepriseInseePeer::EFF3112TRSIEGE, $eff3112trsiege['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eff3112trsiege['max'])) {
                $this->addUsingAlias(CommonEntrepriseInseePeer::EFF3112TRSIEGE, $eff3112trsiege['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::EFF3112TRSIEGE, $eff3112trsiege, $comparison);
    }

    /**
     * Filter the query on the eff3112TrSiegeLib column
     *
     * Example usage:
     * <code>
     * $query->filterByEff3112trsiegelib('fooValue');   // WHERE eff3112TrSiegeLib = 'fooValue'
     * $query->filterByEff3112trsiegelib('%fooValue%'); // WHERE eff3112TrSiegeLib LIKE '%fooValue%'
     * </code>
     *
     * @param     string $eff3112trsiegelib The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByEff3112trsiegelib($eff3112trsiegelib = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($eff3112trsiegelib)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $eff3112trsiegelib)) {
                $eff3112trsiegelib = str_replace('*', '%', $eff3112trsiegelib);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::EFF3112TRSIEGELIB, $eff3112trsiegelib, $comparison);
    }

    /**
     * Filter the query on the effAnSiege column
     *
     * Example usage:
     * <code>
     * $query->filterByEffansiege('fooValue');   // WHERE effAnSiege = 'fooValue'
     * $query->filterByEffansiege('%fooValue%'); // WHERE effAnSiege LIKE '%fooValue%'
     * </code>
     *
     * @param     string $effansiege The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByEffansiege($effansiege = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($effansiege)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $effansiege)) {
                $effansiege = str_replace('*', '%', $effansiege);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::EFFANSIEGE, $effansiege, $comparison);
    }

    /**
     * Filter the query on the apetSiege column
     *
     * Example usage:
     * <code>
     * $query->filterByApetsiege('fooValue');   // WHERE apetSiege = 'fooValue'
     * $query->filterByApetsiege('%fooValue%'); // WHERE apetSiege LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apetsiege The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByApetsiege($apetsiege = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apetsiege)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $apetsiege)) {
                $apetsiege = str_replace('*', '%', $apetsiege);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::APETSIEGE, $apetsiege, $comparison);
    }

    /**
     * Filter the query on the apetSiegeLib column
     *
     * Example usage:
     * <code>
     * $query->filterByApetsiegelib('fooValue');   // WHERE apetSiegeLib = 'fooValue'
     * $query->filterByApetsiegelib('%fooValue%'); // WHERE apetSiegeLib LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apetsiegelib The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByApetsiegelib($apetsiegelib = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apetsiegelib)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $apetsiegelib)) {
                $apetsiegelib = str_replace('*', '%', $apetsiegelib);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::APETSIEGELIB, $apetsiegelib, $comparison);
    }

    /**
     * Filter the query on the trtDerDateSiege column
     *
     * Example usage:
     * <code>
     * $query->filterByTrtderdatesiege('fooValue');   // WHERE trtDerDateSiege = 'fooValue'
     * $query->filterByTrtderdatesiege('%fooValue%'); // WHERE trtDerDateSiege LIKE '%fooValue%'
     * </code>
     *
     * @param     string $trtderdatesiege The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByTrtderdatesiege($trtderdatesiege = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($trtderdatesiege)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $trtderdatesiege)) {
                $trtderdatesiege = str_replace('*', '%', $trtderdatesiege);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::TRTDERDATESIEGE, $trtderdatesiege, $comparison);
    }

    /**
     * Filter the query on the adrEtVoieNum column
     *
     * Example usage:
     * <code>
     * $query->filterByAdretvoienum('fooValue');   // WHERE adrEtVoieNum = 'fooValue'
     * $query->filterByAdretvoienum('%fooValue%'); // WHERE adrEtVoieNum LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adretvoienum The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByAdretvoienum($adretvoienum = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adretvoienum)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adretvoienum)) {
                $adretvoienum = str_replace('*', '%', $adretvoienum);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::ADRETVOIENUM, $adretvoienum, $comparison);
    }

    /**
     * Filter the query on the adrEtVoieType column
     *
     * Example usage:
     * <code>
     * $query->filterByAdretvoietype('fooValue');   // WHERE adrEtVoieType = 'fooValue'
     * $query->filterByAdretvoietype('%fooValue%'); // WHERE adrEtVoieType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adretvoietype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByAdretvoietype($adretvoietype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adretvoietype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adretvoietype)) {
                $adretvoietype = str_replace('*', '%', $adretvoietype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::ADRETVOIETYPE, $adretvoietype, $comparison);
    }

    /**
     * Filter the query on the adrEtVoieLib column
     *
     * Example usage:
     * <code>
     * $query->filterByAdretvoielib('fooValue');   // WHERE adrEtVoieLib = 'fooValue'
     * $query->filterByAdretvoielib('%fooValue%'); // WHERE adrEtVoieLib LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adretvoielib The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByAdretvoielib($adretvoielib = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adretvoielib)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adretvoielib)) {
                $adretvoielib = str_replace('*', '%', $adretvoielib);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::ADRETVOIELIB, $adretvoielib, $comparison);
    }

    /**
     * Filter the query on the adrEtDepCom column
     *
     * Example usage:
     * <code>
     * $query->filterByAdretdepcom('fooValue');   // WHERE adrEtDepCom = 'fooValue'
     * $query->filterByAdretdepcom('%fooValue%'); // WHERE adrEtDepCom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adretdepcom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByAdretdepcom($adretdepcom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adretdepcom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adretdepcom)) {
                $adretdepcom = str_replace('*', '%', $adretdepcom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::ADRETDEPCOM, $adretdepcom, $comparison);
    }

    /**
     * Filter the query on the adrEtComLib column
     *
     * Example usage:
     * <code>
     * $query->filterByAdretcomlib('fooValue');   // WHERE adrEtComLib = 'fooValue'
     * $query->filterByAdretcomlib('%fooValue%'); // WHERE adrEtComLib LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adretcomlib The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByAdretcomlib($adretcomlib = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adretcomlib)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adretcomlib)) {
                $adretcomlib = str_replace('*', '%', $adretcomlib);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::ADRETCOMLIB, $adretcomlib, $comparison);
    }

    /**
     * Filter the query on the adrEtCodePost column
     *
     * Example usage:
     * <code>
     * $query->filterByAdretcodepost('fooValue');   // WHERE adrEtCodePost = 'fooValue'
     * $query->filterByAdretcodepost('%fooValue%'); // WHERE adrEtCodePost LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adretcodepost The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByAdretcodepost($adretcodepost = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adretcodepost)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adretcodepost)) {
                $adretcodepost = str_replace('*', '%', $adretcodepost);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::ADRETCODEPOST, $adretcodepost, $comparison);
    }

    /**
     * Filter the query on the adrEtPost1 column
     *
     * Example usage:
     * <code>
     * $query->filterByAdretpost1('fooValue');   // WHERE adrEtPost1 = 'fooValue'
     * $query->filterByAdretpost1('%fooValue%'); // WHERE adrEtPost1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adretpost1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByAdretpost1($adretpost1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adretpost1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adretpost1)) {
                $adretpost1 = str_replace('*', '%', $adretpost1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::ADRETPOST1, $adretpost1, $comparison);
    }

    /**
     * Filter the query on the adrEtPost2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAdretpost2('fooValue');   // WHERE adrEtPost2 = 'fooValue'
     * $query->filterByAdretpost2('%fooValue%'); // WHERE adrEtPost2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adretpost2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByAdretpost2($adretpost2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adretpost2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adretpost2)) {
                $adretpost2 = str_replace('*', '%', $adretpost2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::ADRETPOST2, $adretpost2, $comparison);
    }

    /**
     * Filter the query on the adrEtPost3 column
     *
     * Example usage:
     * <code>
     * $query->filterByAdretpost3('fooValue');   // WHERE adrEtPost3 = 'fooValue'
     * $query->filterByAdretpost3('%fooValue%'); // WHERE adrEtPost3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adretpost3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByAdretpost3($adretpost3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adretpost3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adretpost3)) {
                $adretpost3 = str_replace('*', '%', $adretpost3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::ADRETPOST3, $adretpost3, $comparison);
    }

    /**
     * Filter the query on the nic column
     *
     * Example usage:
     * <code>
     * $query->filterByNic('fooValue');   // WHERE nic = 'fooValue'
     * $query->filterByNic('%fooValue%'); // WHERE nic LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nic The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByNic($nic = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nic)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nic)) {
                $nic = str_replace('*', '%', $nic);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::NIC, $nic, $comparison);
    }

    /**
     * Filter the query on the etatEt column
     *
     * Example usage:
     * <code>
     * $query->filterByEtatet('fooValue');   // WHERE etatEt = 'fooValue'
     * $query->filterByEtatet('%fooValue%'); // WHERE etatEt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $etatet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByEtatet($etatet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($etatet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $etatet)) {
                $etatet = str_replace('*', '%', $etatet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::ETATET, $etatet, $comparison);
    }

    /**
     * Filter the query on the etatDebDateEt column
     *
     * Example usage:
     * <code>
     * $query->filterByEtatdebdateet('fooValue');   // WHERE etatDebDateEt = 'fooValue'
     * $query->filterByEtatdebdateet('%fooValue%'); // WHERE etatDebDateEt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $etatdebdateet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByEtatdebdateet($etatdebdateet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($etatdebdateet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $etatdebdateet)) {
                $etatdebdateet = str_replace('*', '%', $etatdebdateet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::ETATDEBDATEET, $etatdebdateet, $comparison);
    }

    /**
     * Filter the query on the catEt column
     *
     * Example usage:
     * <code>
     * $query->filterByCatet('fooValue');   // WHERE catEt = 'fooValue'
     * $query->filterByCatet('%fooValue%'); // WHERE catEt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $catet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByCatet($catet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($catet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $catet)) {
                $catet = str_replace('*', '%', $catet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::CATET, $catet, $comparison);
    }

    /**
     * Filter the query on the catEtLib column
     *
     * Example usage:
     * <code>
     * $query->filterByCatetlib('fooValue');   // WHERE catEtLib = 'fooValue'
     * $query->filterByCatetlib('%fooValue%'); // WHERE catEtLib LIKE '%fooValue%'
     * </code>
     *
     * @param     string $catetlib The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByCatetlib($catetlib = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($catetlib)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $catetlib)) {
                $catetlib = str_replace('*', '%', $catetlib);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::CATETLIB, $catetlib, $comparison);
    }

    /**
     * Filter the query on the eff3112TrEt column
     *
     * Example usage:
     * <code>
     * $query->filterByEff3112tret('fooValue');   // WHERE eff3112TrEt = 'fooValue'
     * $query->filterByEff3112tret('%fooValue%'); // WHERE eff3112TrEt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $eff3112tret The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByEff3112tret($eff3112tret = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($eff3112tret)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $eff3112tret)) {
                $eff3112tret = str_replace('*', '%', $eff3112tret);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::EFF3112TRET, $eff3112tret, $comparison);
    }

    /**
     * Filter the query on the eff3112TrEtLib column
     *
     * Example usage:
     * <code>
     * $query->filterByEff3112tretlib('fooValue');   // WHERE eff3112TrEtLib = 'fooValue'
     * $query->filterByEff3112tretlib('%fooValue%'); // WHERE eff3112TrEtLib LIKE '%fooValue%'
     * </code>
     *
     * @param     string $eff3112tretlib The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByEff3112tretlib($eff3112tretlib = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($eff3112tretlib)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $eff3112tretlib)) {
                $eff3112tretlib = str_replace('*', '%', $eff3112tretlib);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::EFF3112TRETLIB, $eff3112tretlib, $comparison);
    }

    /**
     * Filter the query on the effAnEt column
     *
     * Example usage:
     * <code>
     * $query->filterByEffanet('fooValue');   // WHERE effAnEt = 'fooValue'
     * $query->filterByEffanet('%fooValue%'); // WHERE effAnEt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $effanet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByEffanet($effanet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($effanet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $effanet)) {
                $effanet = str_replace('*', '%', $effanet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::EFFANET, $effanet, $comparison);
    }

    /**
     * Filter the query on the apet column
     *
     * Example usage:
     * <code>
     * $query->filterByApet('fooValue');   // WHERE apet = 'fooValue'
     * $query->filterByApet('%fooValue%'); // WHERE apet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByApet($apet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $apet)) {
                $apet = str_replace('*', '%', $apet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::APET, $apet, $comparison);
    }

    /**
     * Filter the query on the apetLib column
     *
     * Example usage:
     * <code>
     * $query->filterByApetlib('fooValue');   // WHERE apetLib = 'fooValue'
     * $query->filterByApetlib('%fooValue%'); // WHERE apetLib LIKE '%fooValue%'
     * </code>
     *
     * @param     string $apetlib The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByApetlib($apetlib = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($apetlib)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $apetlib)) {
                $apetlib = str_replace('*', '%', $apetlib);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::APETLIB, $apetlib, $comparison);
    }

    /**
     * Filter the query on the trtDerDateEt column
     *
     * Example usage:
     * <code>
     * $query->filterByTrtderdateet('fooValue');   // WHERE trtDerDateEt = 'fooValue'
     * $query->filterByTrtderdateet('%fooValue%'); // WHERE trtDerDateEt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $trtderdateet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByTrtderdateet($trtderdateet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($trtderdateet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $trtderdateet)) {
                $trtderdateet = str_replace('*', '%', $trtderdateet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::TRTDERDATEET, $trtderdateet, $comparison);
    }

    /**
     * Filter the query on the etatEtLib column
     *
     * Example usage:
     * <code>
     * $query->filterByEtatetlib('fooValue');   // WHERE etatEtLib = 'fooValue'
     * $query->filterByEtatetlib('%fooValue%'); // WHERE etatEtLib LIKE '%fooValue%'
     * </code>
     *
     * @param     string $etatetlib The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function filterByEtatetlib($etatetlib = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($etatetlib)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $etatetlib)) {
                $etatetlib = str_replace('*', '%', $etatetlib);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEntrepriseInseePeer::ETATETLIB, $etatetlib, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonEntrepriseInsee $commonEntrepriseInsee Object to remove from the list of results
     *
     * @return CommonEntrepriseInseeQuery The current query, for fluid interface
     */
    public function prune($commonEntrepriseInsee = null)
    {
        if ($commonEntrepriseInsee) {
            $this->addUsingAlias(CommonEntrepriseInseePeer::ID, $commonEntrepriseInsee->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
