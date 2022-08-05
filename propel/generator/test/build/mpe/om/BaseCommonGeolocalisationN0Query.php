<?php


/**
 * Base class that represents a query for the 'GeolocalisationN0' table.
 *
 * 
 *
 * @method CommonGeolocalisationN0Query orderById($order = Criteria::ASC) Order by the id column
 * @method CommonGeolocalisationN0Query orderByDenomination($order = Criteria::ASC) Order by the denomination column
 * @method CommonGeolocalisationN0Query orderByDenominationFr($order = Criteria::ASC) Order by the denomination_fr column
 * @method CommonGeolocalisationN0Query orderByDenominationEn($order = Criteria::ASC) Order by the denomination_en column
 * @method CommonGeolocalisationN0Query orderByDenominationEs($order = Criteria::ASC) Order by the denomination_es column
 * @method CommonGeolocalisationN0Query orderByType($order = Criteria::ASC) Order by the type column
 * @method CommonGeolocalisationN0Query orderByLibelleSelectionner($order = Criteria::ASC) Order by the libelle_selectionner column
 * @method CommonGeolocalisationN0Query orderByLibelleSelectionnerFr($order = Criteria::ASC) Order by the libelle_selectionner_fr column
 * @method CommonGeolocalisationN0Query orderByLibelleSelectionnerEn($order = Criteria::ASC) Order by the libelle_selectionner_en column
 * @method CommonGeolocalisationN0Query orderByLibelleSelectionnerEs($order = Criteria::ASC) Order by the libelle_selectionner_es column
 * @method CommonGeolocalisationN0Query orderByLibelleTous($order = Criteria::ASC) Order by the libelle_tous column
 * @method CommonGeolocalisationN0Query orderByLibelleTousFr($order = Criteria::ASC) Order by the libelle_tous_fr column
 * @method CommonGeolocalisationN0Query orderByLibelleTousEn($order = Criteria::ASC) Order by the libelle_tous_en column
 * @method CommonGeolocalisationN0Query orderByLibelleTousEs($order = Criteria::ASC) Order by the libelle_tous_es column
 * @method CommonGeolocalisationN0Query orderByLibelleAucun($order = Criteria::ASC) Order by the libelle_Aucun column
 * @method CommonGeolocalisationN0Query orderByLibelleAucunFr($order = Criteria::ASC) Order by the libelle_Aucun_fr column
 * @method CommonGeolocalisationN0Query orderByLibelleAucunEn($order = Criteria::ASC) Order by the libelle_Aucun_en column
 * @method CommonGeolocalisationN0Query orderByLibelleAucunEs($order = Criteria::ASC) Order by the libelle_Aucun_es column
 * @method CommonGeolocalisationN0Query orderByDenominationAr($order = Criteria::ASC) Order by the denomination_ar column
 * @method CommonGeolocalisationN0Query orderByLibelleSelectionnerAr($order = Criteria::ASC) Order by the libelle_selectionner_ar column
 * @method CommonGeolocalisationN0Query orderByLibelleTousAr($order = Criteria::ASC) Order by the libelle_tous_ar column
 * @method CommonGeolocalisationN0Query orderByLibelleAucunAr($order = Criteria::ASC) Order by the libelle_Aucun_ar column
 * @method CommonGeolocalisationN0Query orderByDenominationSu($order = Criteria::ASC) Order by the denomination_su column
 * @method CommonGeolocalisationN0Query orderByLibelleSelectionnerSu($order = Criteria::ASC) Order by the libelle_selectionner_su column
 * @method CommonGeolocalisationN0Query orderByLibelleTousSu($order = Criteria::ASC) Order by the libelle_tous_su column
 * @method CommonGeolocalisationN0Query orderByLibelleAucunSu($order = Criteria::ASC) Order by the libelle_Aucun_su column
 * @method CommonGeolocalisationN0Query orderByDenominationDu($order = Criteria::ASC) Order by the denomination_du column
 * @method CommonGeolocalisationN0Query orderByLibelleSelectionnerDu($order = Criteria::ASC) Order by the libelle_selectionner_du column
 * @method CommonGeolocalisationN0Query orderByLibelleTousDu($order = Criteria::ASC) Order by the libelle_tous_du column
 * @method CommonGeolocalisationN0Query orderByLibelleAucunDu($order = Criteria::ASC) Order by the libelle_Aucun_du column
 * @method CommonGeolocalisationN0Query orderByDenominationCz($order = Criteria::ASC) Order by the denomination_cz column
 * @method CommonGeolocalisationN0Query orderByLibelleSelectionnerCz($order = Criteria::ASC) Order by the libelle_selectionner_cz column
 * @method CommonGeolocalisationN0Query orderByLibelleTousCz($order = Criteria::ASC) Order by the libelle_tous_cz column
 * @method CommonGeolocalisationN0Query orderByLibelleAucunCz($order = Criteria::ASC) Order by the libelle_Aucun_cz column
 * @method CommonGeolocalisationN0Query orderByDenominationIt($order = Criteria::ASC) Order by the denomination_it column
 * @method CommonGeolocalisationN0Query orderByLibelleSelectionnerIt($order = Criteria::ASC) Order by the libelle_selectionner_it column
 * @method CommonGeolocalisationN0Query orderByLibelleTousIt($order = Criteria::ASC) Order by the libelle_tous_it column
 * @method CommonGeolocalisationN0Query orderByLibelleAucunIt($order = Criteria::ASC) Order by the libelle_Aucun_it column
 *
 * @method CommonGeolocalisationN0Query groupById() Group by the id column
 * @method CommonGeolocalisationN0Query groupByDenomination() Group by the denomination column
 * @method CommonGeolocalisationN0Query groupByDenominationFr() Group by the denomination_fr column
 * @method CommonGeolocalisationN0Query groupByDenominationEn() Group by the denomination_en column
 * @method CommonGeolocalisationN0Query groupByDenominationEs() Group by the denomination_es column
 * @method CommonGeolocalisationN0Query groupByType() Group by the type column
 * @method CommonGeolocalisationN0Query groupByLibelleSelectionner() Group by the libelle_selectionner column
 * @method CommonGeolocalisationN0Query groupByLibelleSelectionnerFr() Group by the libelle_selectionner_fr column
 * @method CommonGeolocalisationN0Query groupByLibelleSelectionnerEn() Group by the libelle_selectionner_en column
 * @method CommonGeolocalisationN0Query groupByLibelleSelectionnerEs() Group by the libelle_selectionner_es column
 * @method CommonGeolocalisationN0Query groupByLibelleTous() Group by the libelle_tous column
 * @method CommonGeolocalisationN0Query groupByLibelleTousFr() Group by the libelle_tous_fr column
 * @method CommonGeolocalisationN0Query groupByLibelleTousEn() Group by the libelle_tous_en column
 * @method CommonGeolocalisationN0Query groupByLibelleTousEs() Group by the libelle_tous_es column
 * @method CommonGeolocalisationN0Query groupByLibelleAucun() Group by the libelle_Aucun column
 * @method CommonGeolocalisationN0Query groupByLibelleAucunFr() Group by the libelle_Aucun_fr column
 * @method CommonGeolocalisationN0Query groupByLibelleAucunEn() Group by the libelle_Aucun_en column
 * @method CommonGeolocalisationN0Query groupByLibelleAucunEs() Group by the libelle_Aucun_es column
 * @method CommonGeolocalisationN0Query groupByDenominationAr() Group by the denomination_ar column
 * @method CommonGeolocalisationN0Query groupByLibelleSelectionnerAr() Group by the libelle_selectionner_ar column
 * @method CommonGeolocalisationN0Query groupByLibelleTousAr() Group by the libelle_tous_ar column
 * @method CommonGeolocalisationN0Query groupByLibelleAucunAr() Group by the libelle_Aucun_ar column
 * @method CommonGeolocalisationN0Query groupByDenominationSu() Group by the denomination_su column
 * @method CommonGeolocalisationN0Query groupByLibelleSelectionnerSu() Group by the libelle_selectionner_su column
 * @method CommonGeolocalisationN0Query groupByLibelleTousSu() Group by the libelle_tous_su column
 * @method CommonGeolocalisationN0Query groupByLibelleAucunSu() Group by the libelle_Aucun_su column
 * @method CommonGeolocalisationN0Query groupByDenominationDu() Group by the denomination_du column
 * @method CommonGeolocalisationN0Query groupByLibelleSelectionnerDu() Group by the libelle_selectionner_du column
 * @method CommonGeolocalisationN0Query groupByLibelleTousDu() Group by the libelle_tous_du column
 * @method CommonGeolocalisationN0Query groupByLibelleAucunDu() Group by the libelle_Aucun_du column
 * @method CommonGeolocalisationN0Query groupByDenominationCz() Group by the denomination_cz column
 * @method CommonGeolocalisationN0Query groupByLibelleSelectionnerCz() Group by the libelle_selectionner_cz column
 * @method CommonGeolocalisationN0Query groupByLibelleTousCz() Group by the libelle_tous_cz column
 * @method CommonGeolocalisationN0Query groupByLibelleAucunCz() Group by the libelle_Aucun_cz column
 * @method CommonGeolocalisationN0Query groupByDenominationIt() Group by the denomination_it column
 * @method CommonGeolocalisationN0Query groupByLibelleSelectionnerIt() Group by the libelle_selectionner_it column
 * @method CommonGeolocalisationN0Query groupByLibelleTousIt() Group by the libelle_tous_it column
 * @method CommonGeolocalisationN0Query groupByLibelleAucunIt() Group by the libelle_Aucun_it column
 *
 * @method CommonGeolocalisationN0Query leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonGeolocalisationN0Query rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonGeolocalisationN0Query innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonGeolocalisationN0 findOne(PropelPDO $con = null) Return the first CommonGeolocalisationN0 matching the query
 * @method CommonGeolocalisationN0 findOneOrCreate(PropelPDO $con = null) Return the first CommonGeolocalisationN0 matching the query, or a new CommonGeolocalisationN0 object populated from the query conditions when no match is found
 *
 * @method CommonGeolocalisationN0 findOneByDenomination(string $denomination) Return the first CommonGeolocalisationN0 filtered by the denomination column
 * @method CommonGeolocalisationN0 findOneByDenominationFr(string $denomination_fr) Return the first CommonGeolocalisationN0 filtered by the denomination_fr column
 * @method CommonGeolocalisationN0 findOneByDenominationEn(string $denomination_en) Return the first CommonGeolocalisationN0 filtered by the denomination_en column
 * @method CommonGeolocalisationN0 findOneByDenominationEs(string $denomination_es) Return the first CommonGeolocalisationN0 filtered by the denomination_es column
 * @method CommonGeolocalisationN0 findOneByType(int $type) Return the first CommonGeolocalisationN0 filtered by the type column
 * @method CommonGeolocalisationN0 findOneByLibelleSelectionner(string $libelle_selectionner) Return the first CommonGeolocalisationN0 filtered by the libelle_selectionner column
 * @method CommonGeolocalisationN0 findOneByLibelleSelectionnerFr(string $libelle_selectionner_fr) Return the first CommonGeolocalisationN0 filtered by the libelle_selectionner_fr column
 * @method CommonGeolocalisationN0 findOneByLibelleSelectionnerEn(string $libelle_selectionner_en) Return the first CommonGeolocalisationN0 filtered by the libelle_selectionner_en column
 * @method CommonGeolocalisationN0 findOneByLibelleSelectionnerEs(string $libelle_selectionner_es) Return the first CommonGeolocalisationN0 filtered by the libelle_selectionner_es column
 * @method CommonGeolocalisationN0 findOneByLibelleTous(string $libelle_tous) Return the first CommonGeolocalisationN0 filtered by the libelle_tous column
 * @method CommonGeolocalisationN0 findOneByLibelleTousFr(string $libelle_tous_fr) Return the first CommonGeolocalisationN0 filtered by the libelle_tous_fr column
 * @method CommonGeolocalisationN0 findOneByLibelleTousEn(string $libelle_tous_en) Return the first CommonGeolocalisationN0 filtered by the libelle_tous_en column
 * @method CommonGeolocalisationN0 findOneByLibelleTousEs(string $libelle_tous_es) Return the first CommonGeolocalisationN0 filtered by the libelle_tous_es column
 * @method CommonGeolocalisationN0 findOneByLibelleAucun(string $libelle_Aucun) Return the first CommonGeolocalisationN0 filtered by the libelle_Aucun column
 * @method CommonGeolocalisationN0 findOneByLibelleAucunFr(string $libelle_Aucun_fr) Return the first CommonGeolocalisationN0 filtered by the libelle_Aucun_fr column
 * @method CommonGeolocalisationN0 findOneByLibelleAucunEn(string $libelle_Aucun_en) Return the first CommonGeolocalisationN0 filtered by the libelle_Aucun_en column
 * @method CommonGeolocalisationN0 findOneByLibelleAucunEs(string $libelle_Aucun_es) Return the first CommonGeolocalisationN0 filtered by the libelle_Aucun_es column
 * @method CommonGeolocalisationN0 findOneByDenominationAr(string $denomination_ar) Return the first CommonGeolocalisationN0 filtered by the denomination_ar column
 * @method CommonGeolocalisationN0 findOneByLibelleSelectionnerAr(string $libelle_selectionner_ar) Return the first CommonGeolocalisationN0 filtered by the libelle_selectionner_ar column
 * @method CommonGeolocalisationN0 findOneByLibelleTousAr(string $libelle_tous_ar) Return the first CommonGeolocalisationN0 filtered by the libelle_tous_ar column
 * @method CommonGeolocalisationN0 findOneByLibelleAucunAr(string $libelle_Aucun_ar) Return the first CommonGeolocalisationN0 filtered by the libelle_Aucun_ar column
 * @method CommonGeolocalisationN0 findOneByDenominationSu(string $denomination_su) Return the first CommonGeolocalisationN0 filtered by the denomination_su column
 * @method CommonGeolocalisationN0 findOneByLibelleSelectionnerSu(string $libelle_selectionner_su) Return the first CommonGeolocalisationN0 filtered by the libelle_selectionner_su column
 * @method CommonGeolocalisationN0 findOneByLibelleTousSu(string $libelle_tous_su) Return the first CommonGeolocalisationN0 filtered by the libelle_tous_su column
 * @method CommonGeolocalisationN0 findOneByLibelleAucunSu(string $libelle_Aucun_su) Return the first CommonGeolocalisationN0 filtered by the libelle_Aucun_su column
 * @method CommonGeolocalisationN0 findOneByDenominationDu(string $denomination_du) Return the first CommonGeolocalisationN0 filtered by the denomination_du column
 * @method CommonGeolocalisationN0 findOneByLibelleSelectionnerDu(string $libelle_selectionner_du) Return the first CommonGeolocalisationN0 filtered by the libelle_selectionner_du column
 * @method CommonGeolocalisationN0 findOneByLibelleTousDu(string $libelle_tous_du) Return the first CommonGeolocalisationN0 filtered by the libelle_tous_du column
 * @method CommonGeolocalisationN0 findOneByLibelleAucunDu(string $libelle_Aucun_du) Return the first CommonGeolocalisationN0 filtered by the libelle_Aucun_du column
 * @method CommonGeolocalisationN0 findOneByDenominationCz(string $denomination_cz) Return the first CommonGeolocalisationN0 filtered by the denomination_cz column
 * @method CommonGeolocalisationN0 findOneByLibelleSelectionnerCz(string $libelle_selectionner_cz) Return the first CommonGeolocalisationN0 filtered by the libelle_selectionner_cz column
 * @method CommonGeolocalisationN0 findOneByLibelleTousCz(string $libelle_tous_cz) Return the first CommonGeolocalisationN0 filtered by the libelle_tous_cz column
 * @method CommonGeolocalisationN0 findOneByLibelleAucunCz(string $libelle_Aucun_cz) Return the first CommonGeolocalisationN0 filtered by the libelle_Aucun_cz column
 * @method CommonGeolocalisationN0 findOneByDenominationIt(string $denomination_it) Return the first CommonGeolocalisationN0 filtered by the denomination_it column
 * @method CommonGeolocalisationN0 findOneByLibelleSelectionnerIt(string $libelle_selectionner_it) Return the first CommonGeolocalisationN0 filtered by the libelle_selectionner_it column
 * @method CommonGeolocalisationN0 findOneByLibelleTousIt(string $libelle_tous_it) Return the first CommonGeolocalisationN0 filtered by the libelle_tous_it column
 * @method CommonGeolocalisationN0 findOneByLibelleAucunIt(string $libelle_Aucun_it) Return the first CommonGeolocalisationN0 filtered by the libelle_Aucun_it column
 *
 * @method array findById(int $id) Return CommonGeolocalisationN0 objects filtered by the id column
 * @method array findByDenomination(string $denomination) Return CommonGeolocalisationN0 objects filtered by the denomination column
 * @method array findByDenominationFr(string $denomination_fr) Return CommonGeolocalisationN0 objects filtered by the denomination_fr column
 * @method array findByDenominationEn(string $denomination_en) Return CommonGeolocalisationN0 objects filtered by the denomination_en column
 * @method array findByDenominationEs(string $denomination_es) Return CommonGeolocalisationN0 objects filtered by the denomination_es column
 * @method array findByType(int $type) Return CommonGeolocalisationN0 objects filtered by the type column
 * @method array findByLibelleSelectionner(string $libelle_selectionner) Return CommonGeolocalisationN0 objects filtered by the libelle_selectionner column
 * @method array findByLibelleSelectionnerFr(string $libelle_selectionner_fr) Return CommonGeolocalisationN0 objects filtered by the libelle_selectionner_fr column
 * @method array findByLibelleSelectionnerEn(string $libelle_selectionner_en) Return CommonGeolocalisationN0 objects filtered by the libelle_selectionner_en column
 * @method array findByLibelleSelectionnerEs(string $libelle_selectionner_es) Return CommonGeolocalisationN0 objects filtered by the libelle_selectionner_es column
 * @method array findByLibelleTous(string $libelle_tous) Return CommonGeolocalisationN0 objects filtered by the libelle_tous column
 * @method array findByLibelleTousFr(string $libelle_tous_fr) Return CommonGeolocalisationN0 objects filtered by the libelle_tous_fr column
 * @method array findByLibelleTousEn(string $libelle_tous_en) Return CommonGeolocalisationN0 objects filtered by the libelle_tous_en column
 * @method array findByLibelleTousEs(string $libelle_tous_es) Return CommonGeolocalisationN0 objects filtered by the libelle_tous_es column
 * @method array findByLibelleAucun(string $libelle_Aucun) Return CommonGeolocalisationN0 objects filtered by the libelle_Aucun column
 * @method array findByLibelleAucunFr(string $libelle_Aucun_fr) Return CommonGeolocalisationN0 objects filtered by the libelle_Aucun_fr column
 * @method array findByLibelleAucunEn(string $libelle_Aucun_en) Return CommonGeolocalisationN0 objects filtered by the libelle_Aucun_en column
 * @method array findByLibelleAucunEs(string $libelle_Aucun_es) Return CommonGeolocalisationN0 objects filtered by the libelle_Aucun_es column
 * @method array findByDenominationAr(string $denomination_ar) Return CommonGeolocalisationN0 objects filtered by the denomination_ar column
 * @method array findByLibelleSelectionnerAr(string $libelle_selectionner_ar) Return CommonGeolocalisationN0 objects filtered by the libelle_selectionner_ar column
 * @method array findByLibelleTousAr(string $libelle_tous_ar) Return CommonGeolocalisationN0 objects filtered by the libelle_tous_ar column
 * @method array findByLibelleAucunAr(string $libelle_Aucun_ar) Return CommonGeolocalisationN0 objects filtered by the libelle_Aucun_ar column
 * @method array findByDenominationSu(string $denomination_su) Return CommonGeolocalisationN0 objects filtered by the denomination_su column
 * @method array findByLibelleSelectionnerSu(string $libelle_selectionner_su) Return CommonGeolocalisationN0 objects filtered by the libelle_selectionner_su column
 * @method array findByLibelleTousSu(string $libelle_tous_su) Return CommonGeolocalisationN0 objects filtered by the libelle_tous_su column
 * @method array findByLibelleAucunSu(string $libelle_Aucun_su) Return CommonGeolocalisationN0 objects filtered by the libelle_Aucun_su column
 * @method array findByDenominationDu(string $denomination_du) Return CommonGeolocalisationN0 objects filtered by the denomination_du column
 * @method array findByLibelleSelectionnerDu(string $libelle_selectionner_du) Return CommonGeolocalisationN0 objects filtered by the libelle_selectionner_du column
 * @method array findByLibelleTousDu(string $libelle_tous_du) Return CommonGeolocalisationN0 objects filtered by the libelle_tous_du column
 * @method array findByLibelleAucunDu(string $libelle_Aucun_du) Return CommonGeolocalisationN0 objects filtered by the libelle_Aucun_du column
 * @method array findByDenominationCz(string $denomination_cz) Return CommonGeolocalisationN0 objects filtered by the denomination_cz column
 * @method array findByLibelleSelectionnerCz(string $libelle_selectionner_cz) Return CommonGeolocalisationN0 objects filtered by the libelle_selectionner_cz column
 * @method array findByLibelleTousCz(string $libelle_tous_cz) Return CommonGeolocalisationN0 objects filtered by the libelle_tous_cz column
 * @method array findByLibelleAucunCz(string $libelle_Aucun_cz) Return CommonGeolocalisationN0 objects filtered by the libelle_Aucun_cz column
 * @method array findByDenominationIt(string $denomination_it) Return CommonGeolocalisationN0 objects filtered by the denomination_it column
 * @method array findByLibelleSelectionnerIt(string $libelle_selectionner_it) Return CommonGeolocalisationN0 objects filtered by the libelle_selectionner_it column
 * @method array findByLibelleTousIt(string $libelle_tous_it) Return CommonGeolocalisationN0 objects filtered by the libelle_tous_it column
 * @method array findByLibelleAucunIt(string $libelle_Aucun_it) Return CommonGeolocalisationN0 objects filtered by the libelle_Aucun_it column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonGeolocalisationN0Query extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonGeolocalisationN0Query object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonGeolocalisationN0', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonGeolocalisationN0Query object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonGeolocalisationN0Query|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonGeolocalisationN0Query
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonGeolocalisationN0Query) {
            return $criteria;
        }
        $query = new CommonGeolocalisationN0Query();
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
     * @return   CommonGeolocalisationN0|CommonGeolocalisationN0[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonGeolocalisationN0Peer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonGeolocalisationN0Peer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonGeolocalisationN0 A model object, or null if the key is not found
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
     * @return                 CommonGeolocalisationN0 A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `denomination`, `denomination_fr`, `denomination_en`, `denomination_es`, `type`, `libelle_selectionner`, `libelle_selectionner_fr`, `libelle_selectionner_en`, `libelle_selectionner_es`, `libelle_tous`, `libelle_tous_fr`, `libelle_tous_en`, `libelle_tous_es`, `libelle_Aucun`, `libelle_Aucun_fr`, `libelle_Aucun_en`, `libelle_Aucun_es`, `denomination_ar`, `libelle_selectionner_ar`, `libelle_tous_ar`, `libelle_Aucun_ar`, `denomination_su`, `libelle_selectionner_su`, `libelle_tous_su`, `libelle_Aucun_su`, `denomination_du`, `libelle_selectionner_du`, `libelle_tous_du`, `libelle_Aucun_du`, `denomination_cz`, `libelle_selectionner_cz`, `libelle_tous_cz`, `libelle_Aucun_cz`, `denomination_it`, `libelle_selectionner_it`, `libelle_tous_it`, `libelle_Aucun_it` FROM `GeolocalisationN0` WHERE `id` = :p0';
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
            $obj = new CommonGeolocalisationN0();
            $obj->hydrate($row);
            CommonGeolocalisationN0Peer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonGeolocalisationN0|CommonGeolocalisationN0[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonGeolocalisationN0[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::ID, $keys, Criteria::IN);
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
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonGeolocalisationN0Peer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonGeolocalisationN0Peer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the denomination column
     *
     * Example usage:
     * <code>
     * $query->filterByDenomination('fooValue');   // WHERE denomination = 'fooValue'
     * $query->filterByDenomination('%fooValue%'); // WHERE denomination LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denomination The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterByDenomination($denomination = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denomination)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denomination)) {
                $denomination = str_replace('*', '%', $denomination);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::DENOMINATION, $denomination, $comparison);
    }

    /**
     * Filter the query on the denomination_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByDenominationFr('fooValue');   // WHERE denomination_fr = 'fooValue'
     * $query->filterByDenominationFr('%fooValue%'); // WHERE denomination_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denominationFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterByDenominationFr($denominationFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denominationFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denominationFr)) {
                $denominationFr = str_replace('*', '%', $denominationFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::DENOMINATION_FR, $denominationFr, $comparison);
    }

    /**
     * Filter the query on the denomination_en column
     *
     * Example usage:
     * <code>
     * $query->filterByDenominationEn('fooValue');   // WHERE denomination_en = 'fooValue'
     * $query->filterByDenominationEn('%fooValue%'); // WHERE denomination_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denominationEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterByDenominationEn($denominationEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denominationEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denominationEn)) {
                $denominationEn = str_replace('*', '%', $denominationEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::DENOMINATION_EN, $denominationEn, $comparison);
    }

    /**
     * Filter the query on the denomination_es column
     *
     * Example usage:
     * <code>
     * $query->filterByDenominationEs('fooValue');   // WHERE denomination_es = 'fooValue'
     * $query->filterByDenominationEs('%fooValue%'); // WHERE denomination_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denominationEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterByDenominationEs($denominationEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denominationEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denominationEs)) {
                $denominationEs = str_replace('*', '%', $denominationEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::DENOMINATION_ES, $denominationEs, $comparison);
    }

    /**
     * Filter the query on the type column
     *
     * Example usage:
     * <code>
     * $query->filterByType(1234); // WHERE type = 1234
     * $query->filterByType(array(12, 34)); // WHERE type IN (12, 34)
     * $query->filterByType(array('min' => 12)); // WHERE type >= 12
     * $query->filterByType(array('max' => 12)); // WHERE type <= 12
     * </code>
     *
     * @param     mixed $type The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (is_array($type)) {
            $useMinMax = false;
            if (isset($type['min'])) {
                $this->addUsingAlias(CommonGeolocalisationN0Peer::TYPE, $type['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($type['max'])) {
                $this->addUsingAlias(CommonGeolocalisationN0Peer::TYPE, $type['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the libelle_selectionner column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleSelectionner('fooValue');   // WHERE libelle_selectionner = 'fooValue'
     * $query->filterByLibelleSelectionner('%fooValue%'); // WHERE libelle_selectionner LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleSelectionner The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterByLibelleSelectionner($libelleSelectionner = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleSelectionner)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleSelectionner)) {
                $libelleSelectionner = str_replace('*', '%', $libelleSelectionner);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER, $libelleSelectionner, $comparison);
    }

    /**
     * Filter the query on the libelle_selectionner_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleSelectionnerFr('fooValue');   // WHERE libelle_selectionner_fr = 'fooValue'
     * $query->filterByLibelleSelectionnerFr('%fooValue%'); // WHERE libelle_selectionner_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleSelectionnerFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterByLibelleSelectionnerFr($libelleSelectionnerFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleSelectionnerFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleSelectionnerFr)) {
                $libelleSelectionnerFr = str_replace('*', '%', $libelleSelectionnerFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_FR, $libelleSelectionnerFr, $comparison);
    }

    /**
     * Filter the query on the libelle_selectionner_en column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleSelectionnerEn('fooValue');   // WHERE libelle_selectionner_en = 'fooValue'
     * $query->filterByLibelleSelectionnerEn('%fooValue%'); // WHERE libelle_selectionner_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleSelectionnerEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterByLibelleSelectionnerEn($libelleSelectionnerEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleSelectionnerEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleSelectionnerEn)) {
                $libelleSelectionnerEn = str_replace('*', '%', $libelleSelectionnerEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_EN, $libelleSelectionnerEn, $comparison);
    }

    /**
     * Filter the query on the libelle_selectionner_es column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleSelectionnerEs('fooValue');   // WHERE libelle_selectionner_es = 'fooValue'
     * $query->filterByLibelleSelectionnerEs('%fooValue%'); // WHERE libelle_selectionner_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleSelectionnerEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterByLibelleSelectionnerEs($libelleSelectionnerEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleSelectionnerEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleSelectionnerEs)) {
                $libelleSelectionnerEs = str_replace('*', '%', $libelleSelectionnerEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_ES, $libelleSelectionnerEs, $comparison);
    }

    /**
     * Filter the query on the libelle_tous column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleTous('fooValue');   // WHERE libelle_tous = 'fooValue'
     * $query->filterByLibelleTous('%fooValue%'); // WHERE libelle_tous LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleTous The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterByLibelleTous($libelleTous = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleTous)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleTous)) {
                $libelleTous = str_replace('*', '%', $libelleTous);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::LIBELLE_TOUS, $libelleTous, $comparison);
    }

    /**
     * Filter the query on the libelle_tous_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleTousFr('fooValue');   // WHERE libelle_tous_fr = 'fooValue'
     * $query->filterByLibelleTousFr('%fooValue%'); // WHERE libelle_tous_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleTousFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterByLibelleTousFr($libelleTousFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleTousFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleTousFr)) {
                $libelleTousFr = str_replace('*', '%', $libelleTousFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::LIBELLE_TOUS_FR, $libelleTousFr, $comparison);
    }

    /**
     * Filter the query on the libelle_tous_en column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleTousEn('fooValue');   // WHERE libelle_tous_en = 'fooValue'
     * $query->filterByLibelleTousEn('%fooValue%'); // WHERE libelle_tous_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleTousEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterByLibelleTousEn($libelleTousEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleTousEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleTousEn)) {
                $libelleTousEn = str_replace('*', '%', $libelleTousEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::LIBELLE_TOUS_EN, $libelleTousEn, $comparison);
    }

    /**
     * Filter the query on the libelle_tous_es column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleTousEs('fooValue');   // WHERE libelle_tous_es = 'fooValue'
     * $query->filterByLibelleTousEs('%fooValue%'); // WHERE libelle_tous_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleTousEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterByLibelleTousEs($libelleTousEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleTousEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleTousEs)) {
                $libelleTousEs = str_replace('*', '%', $libelleTousEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::LIBELLE_TOUS_ES, $libelleTousEs, $comparison);
    }

    /**
     * Filter the query on the libelle_Aucun column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleAucun('fooValue');   // WHERE libelle_Aucun = 'fooValue'
     * $query->filterByLibelleAucun('%fooValue%'); // WHERE libelle_Aucun LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleAucun The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterByLibelleAucun($libelleAucun = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleAucun)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleAucun)) {
                $libelleAucun = str_replace('*', '%', $libelleAucun);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::LIBELLE_AUCUN, $libelleAucun, $comparison);
    }

    /**
     * Filter the query on the libelle_Aucun_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleAucunFr('fooValue');   // WHERE libelle_Aucun_fr = 'fooValue'
     * $query->filterByLibelleAucunFr('%fooValue%'); // WHERE libelle_Aucun_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleAucunFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterByLibelleAucunFr($libelleAucunFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleAucunFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleAucunFr)) {
                $libelleAucunFr = str_replace('*', '%', $libelleAucunFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_FR, $libelleAucunFr, $comparison);
    }

    /**
     * Filter the query on the libelle_Aucun_en column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleAucunEn('fooValue');   // WHERE libelle_Aucun_en = 'fooValue'
     * $query->filterByLibelleAucunEn('%fooValue%'); // WHERE libelle_Aucun_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleAucunEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterByLibelleAucunEn($libelleAucunEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleAucunEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleAucunEn)) {
                $libelleAucunEn = str_replace('*', '%', $libelleAucunEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_EN, $libelleAucunEn, $comparison);
    }

    /**
     * Filter the query on the libelle_Aucun_es column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleAucunEs('fooValue');   // WHERE libelle_Aucun_es = 'fooValue'
     * $query->filterByLibelleAucunEs('%fooValue%'); // WHERE libelle_Aucun_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleAucunEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterByLibelleAucunEs($libelleAucunEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleAucunEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleAucunEs)) {
                $libelleAucunEs = str_replace('*', '%', $libelleAucunEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_ES, $libelleAucunEs, $comparison);
    }

    /**
     * Filter the query on the denomination_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByDenominationAr('fooValue');   // WHERE denomination_ar = 'fooValue'
     * $query->filterByDenominationAr('%fooValue%'); // WHERE denomination_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denominationAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterByDenominationAr($denominationAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denominationAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denominationAr)) {
                $denominationAr = str_replace('*', '%', $denominationAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::DENOMINATION_AR, $denominationAr, $comparison);
    }

    /**
     * Filter the query on the libelle_selectionner_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleSelectionnerAr('fooValue');   // WHERE libelle_selectionner_ar = 'fooValue'
     * $query->filterByLibelleSelectionnerAr('%fooValue%'); // WHERE libelle_selectionner_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleSelectionnerAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterByLibelleSelectionnerAr($libelleSelectionnerAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleSelectionnerAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleSelectionnerAr)) {
                $libelleSelectionnerAr = str_replace('*', '%', $libelleSelectionnerAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_AR, $libelleSelectionnerAr, $comparison);
    }

    /**
     * Filter the query on the libelle_tous_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleTousAr('fooValue');   // WHERE libelle_tous_ar = 'fooValue'
     * $query->filterByLibelleTousAr('%fooValue%'); // WHERE libelle_tous_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleTousAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterByLibelleTousAr($libelleTousAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleTousAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleTousAr)) {
                $libelleTousAr = str_replace('*', '%', $libelleTousAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::LIBELLE_TOUS_AR, $libelleTousAr, $comparison);
    }

    /**
     * Filter the query on the libelle_Aucun_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleAucunAr('fooValue');   // WHERE libelle_Aucun_ar = 'fooValue'
     * $query->filterByLibelleAucunAr('%fooValue%'); // WHERE libelle_Aucun_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleAucunAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterByLibelleAucunAr($libelleAucunAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleAucunAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleAucunAr)) {
                $libelleAucunAr = str_replace('*', '%', $libelleAucunAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_AR, $libelleAucunAr, $comparison);
    }

    /**
     * Filter the query on the denomination_su column
     *
     * Example usage:
     * <code>
     * $query->filterByDenominationSu('fooValue');   // WHERE denomination_su = 'fooValue'
     * $query->filterByDenominationSu('%fooValue%'); // WHERE denomination_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denominationSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterByDenominationSu($denominationSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denominationSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denominationSu)) {
                $denominationSu = str_replace('*', '%', $denominationSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::DENOMINATION_SU, $denominationSu, $comparison);
    }

    /**
     * Filter the query on the libelle_selectionner_su column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleSelectionnerSu('fooValue');   // WHERE libelle_selectionner_su = 'fooValue'
     * $query->filterByLibelleSelectionnerSu('%fooValue%'); // WHERE libelle_selectionner_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleSelectionnerSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterByLibelleSelectionnerSu($libelleSelectionnerSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleSelectionnerSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleSelectionnerSu)) {
                $libelleSelectionnerSu = str_replace('*', '%', $libelleSelectionnerSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_SU, $libelleSelectionnerSu, $comparison);
    }

    /**
     * Filter the query on the libelle_tous_su column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleTousSu('fooValue');   // WHERE libelle_tous_su = 'fooValue'
     * $query->filterByLibelleTousSu('%fooValue%'); // WHERE libelle_tous_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleTousSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterByLibelleTousSu($libelleTousSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleTousSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleTousSu)) {
                $libelleTousSu = str_replace('*', '%', $libelleTousSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::LIBELLE_TOUS_SU, $libelleTousSu, $comparison);
    }

    /**
     * Filter the query on the libelle_Aucun_su column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleAucunSu('fooValue');   // WHERE libelle_Aucun_su = 'fooValue'
     * $query->filterByLibelleAucunSu('%fooValue%'); // WHERE libelle_Aucun_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleAucunSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterByLibelleAucunSu($libelleAucunSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleAucunSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleAucunSu)) {
                $libelleAucunSu = str_replace('*', '%', $libelleAucunSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_SU, $libelleAucunSu, $comparison);
    }

    /**
     * Filter the query on the denomination_du column
     *
     * Example usage:
     * <code>
     * $query->filterByDenominationDu('fooValue');   // WHERE denomination_du = 'fooValue'
     * $query->filterByDenominationDu('%fooValue%'); // WHERE denomination_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denominationDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterByDenominationDu($denominationDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denominationDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denominationDu)) {
                $denominationDu = str_replace('*', '%', $denominationDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::DENOMINATION_DU, $denominationDu, $comparison);
    }

    /**
     * Filter the query on the libelle_selectionner_du column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleSelectionnerDu('fooValue');   // WHERE libelle_selectionner_du = 'fooValue'
     * $query->filterByLibelleSelectionnerDu('%fooValue%'); // WHERE libelle_selectionner_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleSelectionnerDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterByLibelleSelectionnerDu($libelleSelectionnerDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleSelectionnerDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleSelectionnerDu)) {
                $libelleSelectionnerDu = str_replace('*', '%', $libelleSelectionnerDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_DU, $libelleSelectionnerDu, $comparison);
    }

    /**
     * Filter the query on the libelle_tous_du column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleTousDu('fooValue');   // WHERE libelle_tous_du = 'fooValue'
     * $query->filterByLibelleTousDu('%fooValue%'); // WHERE libelle_tous_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleTousDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterByLibelleTousDu($libelleTousDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleTousDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleTousDu)) {
                $libelleTousDu = str_replace('*', '%', $libelleTousDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::LIBELLE_TOUS_DU, $libelleTousDu, $comparison);
    }

    /**
     * Filter the query on the libelle_Aucun_du column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleAucunDu('fooValue');   // WHERE libelle_Aucun_du = 'fooValue'
     * $query->filterByLibelleAucunDu('%fooValue%'); // WHERE libelle_Aucun_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleAucunDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterByLibelleAucunDu($libelleAucunDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleAucunDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleAucunDu)) {
                $libelleAucunDu = str_replace('*', '%', $libelleAucunDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_DU, $libelleAucunDu, $comparison);
    }

    /**
     * Filter the query on the denomination_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByDenominationCz('fooValue');   // WHERE denomination_cz = 'fooValue'
     * $query->filterByDenominationCz('%fooValue%'); // WHERE denomination_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denominationCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterByDenominationCz($denominationCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denominationCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denominationCz)) {
                $denominationCz = str_replace('*', '%', $denominationCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::DENOMINATION_CZ, $denominationCz, $comparison);
    }

    /**
     * Filter the query on the libelle_selectionner_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleSelectionnerCz('fooValue');   // WHERE libelle_selectionner_cz = 'fooValue'
     * $query->filterByLibelleSelectionnerCz('%fooValue%'); // WHERE libelle_selectionner_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleSelectionnerCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterByLibelleSelectionnerCz($libelleSelectionnerCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleSelectionnerCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleSelectionnerCz)) {
                $libelleSelectionnerCz = str_replace('*', '%', $libelleSelectionnerCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_CZ, $libelleSelectionnerCz, $comparison);
    }

    /**
     * Filter the query on the libelle_tous_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleTousCz('fooValue');   // WHERE libelle_tous_cz = 'fooValue'
     * $query->filterByLibelleTousCz('%fooValue%'); // WHERE libelle_tous_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleTousCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterByLibelleTousCz($libelleTousCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleTousCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleTousCz)) {
                $libelleTousCz = str_replace('*', '%', $libelleTousCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::LIBELLE_TOUS_CZ, $libelleTousCz, $comparison);
    }

    /**
     * Filter the query on the libelle_Aucun_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleAucunCz('fooValue');   // WHERE libelle_Aucun_cz = 'fooValue'
     * $query->filterByLibelleAucunCz('%fooValue%'); // WHERE libelle_Aucun_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleAucunCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterByLibelleAucunCz($libelleAucunCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleAucunCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleAucunCz)) {
                $libelleAucunCz = str_replace('*', '%', $libelleAucunCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_CZ, $libelleAucunCz, $comparison);
    }

    /**
     * Filter the query on the denomination_it column
     *
     * Example usage:
     * <code>
     * $query->filterByDenominationIt('fooValue');   // WHERE denomination_it = 'fooValue'
     * $query->filterByDenominationIt('%fooValue%'); // WHERE denomination_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denominationIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterByDenominationIt($denominationIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denominationIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denominationIt)) {
                $denominationIt = str_replace('*', '%', $denominationIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::DENOMINATION_IT, $denominationIt, $comparison);
    }

    /**
     * Filter the query on the libelle_selectionner_it column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleSelectionnerIt('fooValue');   // WHERE libelle_selectionner_it = 'fooValue'
     * $query->filterByLibelleSelectionnerIt('%fooValue%'); // WHERE libelle_selectionner_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleSelectionnerIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterByLibelleSelectionnerIt($libelleSelectionnerIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleSelectionnerIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleSelectionnerIt)) {
                $libelleSelectionnerIt = str_replace('*', '%', $libelleSelectionnerIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_IT, $libelleSelectionnerIt, $comparison);
    }

    /**
     * Filter the query on the libelle_tous_it column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleTousIt('fooValue');   // WHERE libelle_tous_it = 'fooValue'
     * $query->filterByLibelleTousIt('%fooValue%'); // WHERE libelle_tous_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleTousIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterByLibelleTousIt($libelleTousIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleTousIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleTousIt)) {
                $libelleTousIt = str_replace('*', '%', $libelleTousIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::LIBELLE_TOUS_IT, $libelleTousIt, $comparison);
    }

    /**
     * Filter the query on the libelle_Aucun_it column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleAucunIt('fooValue');   // WHERE libelle_Aucun_it = 'fooValue'
     * $query->filterByLibelleAucunIt('%fooValue%'); // WHERE libelle_Aucun_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleAucunIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function filterByLibelleAucunIt($libelleAucunIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleAucunIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleAucunIt)) {
                $libelleAucunIt = str_replace('*', '%', $libelleAucunIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_IT, $libelleAucunIt, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonGeolocalisationN0 $commonGeolocalisationN0 Object to remove from the list of results
     *
     * @return CommonGeolocalisationN0Query The current query, for fluid interface
     */
    public function prune($commonGeolocalisationN0 = null)
    {
        if ($commonGeolocalisationN0) {
            $this->addUsingAlias(CommonGeolocalisationN0Peer::ID, $commonGeolocalisationN0->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
