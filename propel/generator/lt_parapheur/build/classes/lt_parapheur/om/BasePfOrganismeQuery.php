<?php


/**
 * Base class that represents a query for the 'pf_organisme' table.
 *
 * 
 *
 * @method PfOrganismeQuery orderByIdOrganisme($order = Criteria::ASC) Order by the ID_ORGANISME column
 * @method PfOrganismeQuery orderByIdEntite($order = Criteria::ASC) Order by the ID_ENTITE column
 * @method PfOrganismeQuery orderByDenominationFr($order = Criteria::ASC) Order by the DENOMINATION_FR column
 * @method PfOrganismeQuery orderByDenominationAr($order = Criteria::ASC) Order by the DENOMINATION_AR column
 * @method PfOrganismeQuery orderByUrlFormReclamation($order = Criteria::ASC) Order by the URL_FORM_RECLAMATION column
 * @method PfOrganismeQuery orderByCategorie($order = Criteria::ASC) Order by the CATEGORIE column
 * @method PfOrganismeQuery orderByIdRegion($order = Criteria::ASC) Order by the ID_REGION column
 * @method PfOrganismeQuery orderByIdProvince($order = Criteria::ASC) Order by the ID_PROVINCE column
 * @method PfOrganismeQuery orderByIdCommune($order = Criteria::ASC) Order by the ID_COMMUNE column
 * @method PfOrganismeQuery orderByMotsClesFr($order = Criteria::ASC) Order by the MOTS_CLES_FR column
 * @method PfOrganismeQuery orderByMotsClesAr($order = Criteria::ASC) Order by the MOTS_CLES_AR column
 * @method PfOrganismeQuery orderByTelephones($order = Criteria::ASC) Order by the TELEPHONES column
 * @method PfOrganismeQuery orderByHorairesAr($order = Criteria::ASC) Order by the HORAIRES_AR column
 * @method PfOrganismeQuery orderByHorairesFr($order = Criteria::ASC) Order by the HORAIRES_FR column
 * @method PfOrganismeQuery orderByActif($order = Criteria::ASC) Order by the ACTIF column
 * @method PfOrganismeQuery orderByOrdre($order = Criteria::ASC) Order by the ORDRE column
 * @method PfOrganismeQuery orderByDateModification($order = Criteria::ASC) Order by the DATE_MODIFICATION column
 *
 * @method PfOrganismeQuery groupByIdOrganisme() Group by the ID_ORGANISME column
 * @method PfOrganismeQuery groupByIdEntite() Group by the ID_ENTITE column
 * @method PfOrganismeQuery groupByDenominationFr() Group by the DENOMINATION_FR column
 * @method PfOrganismeQuery groupByDenominationAr() Group by the DENOMINATION_AR column
 * @method PfOrganismeQuery groupByUrlFormReclamation() Group by the URL_FORM_RECLAMATION column
 * @method PfOrganismeQuery groupByCategorie() Group by the CATEGORIE column
 * @method PfOrganismeQuery groupByIdRegion() Group by the ID_REGION column
 * @method PfOrganismeQuery groupByIdProvince() Group by the ID_PROVINCE column
 * @method PfOrganismeQuery groupByIdCommune() Group by the ID_COMMUNE column
 * @method PfOrganismeQuery groupByMotsClesFr() Group by the MOTS_CLES_FR column
 * @method PfOrganismeQuery groupByMotsClesAr() Group by the MOTS_CLES_AR column
 * @method PfOrganismeQuery groupByTelephones() Group by the TELEPHONES column
 * @method PfOrganismeQuery groupByHorairesAr() Group by the HORAIRES_AR column
 * @method PfOrganismeQuery groupByHorairesFr() Group by the HORAIRES_FR column
 * @method PfOrganismeQuery groupByActif() Group by the ACTIF column
 * @method PfOrganismeQuery groupByOrdre() Group by the ORDRE column
 * @method PfOrganismeQuery groupByDateModification() Group by the DATE_MODIFICATION column
 *
 * @method PfOrganismeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PfOrganismeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PfOrganismeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PfOrganisme findOne(PropelPDO $con = null) Return the first PfOrganisme matching the query
 * @method PfOrganisme findOneOrCreate(PropelPDO $con = null) Return the first PfOrganisme matching the query, or a new PfOrganisme object populated from the query conditions when no match is found
 *
 * @method PfOrganisme findOneByIdEntite(int $ID_ENTITE) Return the first PfOrganisme filtered by the ID_ENTITE column
 * @method PfOrganisme findOneByDenominationFr(string $DENOMINATION_FR) Return the first PfOrganisme filtered by the DENOMINATION_FR column
 * @method PfOrganisme findOneByDenominationAr(string $DENOMINATION_AR) Return the first PfOrganisme filtered by the DENOMINATION_AR column
 * @method PfOrganisme findOneByUrlFormReclamation(string $URL_FORM_RECLAMATION) Return the first PfOrganisme filtered by the URL_FORM_RECLAMATION column
 * @method PfOrganisme findOneByCategorie(int $CATEGORIE) Return the first PfOrganisme filtered by the CATEGORIE column
 * @method PfOrganisme findOneByIdRegion(int $ID_REGION) Return the first PfOrganisme filtered by the ID_REGION column
 * @method PfOrganisme findOneByIdProvince(int $ID_PROVINCE) Return the first PfOrganisme filtered by the ID_PROVINCE column
 * @method PfOrganisme findOneByIdCommune(int $ID_COMMUNE) Return the first PfOrganisme filtered by the ID_COMMUNE column
 * @method PfOrganisme findOneByMotsClesFr(string $MOTS_CLES_FR) Return the first PfOrganisme filtered by the MOTS_CLES_FR column
 * @method PfOrganisme findOneByMotsClesAr(string $MOTS_CLES_AR) Return the first PfOrganisme filtered by the MOTS_CLES_AR column
 * @method PfOrganisme findOneByTelephones(string $TELEPHONES) Return the first PfOrganisme filtered by the TELEPHONES column
 * @method PfOrganisme findOneByHorairesAr(string $HORAIRES_AR) Return the first PfOrganisme filtered by the HORAIRES_AR column
 * @method PfOrganisme findOneByHorairesFr(string $HORAIRES_FR) Return the first PfOrganisme filtered by the HORAIRES_FR column
 * @method PfOrganisme findOneByActif(string $ACTIF) Return the first PfOrganisme filtered by the ACTIF column
 * @method PfOrganisme findOneByOrdre(int $ORDRE) Return the first PfOrganisme filtered by the ORDRE column
 * @method PfOrganisme findOneByDateModification(string $DATE_MODIFICATION) Return the first PfOrganisme filtered by the DATE_MODIFICATION column
 *
 * @method array findByIdOrganisme(int $ID_ORGANISME) Return PfOrganisme objects filtered by the ID_ORGANISME column
 * @method array findByIdEntite(int $ID_ENTITE) Return PfOrganisme objects filtered by the ID_ENTITE column
 * @method array findByDenominationFr(string $DENOMINATION_FR) Return PfOrganisme objects filtered by the DENOMINATION_FR column
 * @method array findByDenominationAr(string $DENOMINATION_AR) Return PfOrganisme objects filtered by the DENOMINATION_AR column
 * @method array findByUrlFormReclamation(string $URL_FORM_RECLAMATION) Return PfOrganisme objects filtered by the URL_FORM_RECLAMATION column
 * @method array findByCategorie(int $CATEGORIE) Return PfOrganisme objects filtered by the CATEGORIE column
 * @method array findByIdRegion(int $ID_REGION) Return PfOrganisme objects filtered by the ID_REGION column
 * @method array findByIdProvince(int $ID_PROVINCE) Return PfOrganisme objects filtered by the ID_PROVINCE column
 * @method array findByIdCommune(int $ID_COMMUNE) Return PfOrganisme objects filtered by the ID_COMMUNE column
 * @method array findByMotsClesFr(string $MOTS_CLES_FR) Return PfOrganisme objects filtered by the MOTS_CLES_FR column
 * @method array findByMotsClesAr(string $MOTS_CLES_AR) Return PfOrganisme objects filtered by the MOTS_CLES_AR column
 * @method array findByTelephones(string $TELEPHONES) Return PfOrganisme objects filtered by the TELEPHONES column
 * @method array findByHorairesAr(string $HORAIRES_AR) Return PfOrganisme objects filtered by the HORAIRES_AR column
 * @method array findByHorairesFr(string $HORAIRES_FR) Return PfOrganisme objects filtered by the HORAIRES_FR column
 * @method array findByActif(string $ACTIF) Return PfOrganisme objects filtered by the ACTIF column
 * @method array findByOrdre(int $ORDRE) Return PfOrganisme objects filtered by the ORDRE column
 * @method array findByDateModification(string $DATE_MODIFICATION) Return PfOrganisme objects filtered by the DATE_MODIFICATION column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BasePfOrganismeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePfOrganismeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'PfOrganisme', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PfOrganismeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PfOrganismeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PfOrganismeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PfOrganismeQuery) {
            return $criteria;
        }
        $query = new PfOrganismeQuery();
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
     * @return   PfOrganisme|PfOrganisme[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PfOrganismePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PfOrganismePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 PfOrganisme A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdOrganisme($key, $con = null)
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
     * @return                 PfOrganisme A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_ORGANISME`, `ID_ENTITE`, `DENOMINATION_FR`, `DENOMINATION_AR`, `URL_FORM_RECLAMATION`, `CATEGORIE`, `ID_REGION`, `ID_PROVINCE`, `ID_COMMUNE`, `MOTS_CLES_FR`, `MOTS_CLES_AR`, `TELEPHONES`, `HORAIRES_AR`, `HORAIRES_FR`, `ACTIF`, `ORDRE`, `DATE_MODIFICATION` FROM `pf_organisme` WHERE `ID_ORGANISME` = :p0';
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
            $obj = new PfOrganisme();
            $obj->hydrate($row);
            PfOrganismePeer::addInstanceToPool($obj, (string) $key);
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
     * @return PfOrganisme|PfOrganisme[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|PfOrganisme[]|mixed the list of results, formatted by the current formatter
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
     * @return PfOrganismeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PfOrganismePeer::ID_ORGANISME, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PfOrganismeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PfOrganismePeer::ID_ORGANISME, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID_ORGANISME column
     *
     * Example usage:
     * <code>
     * $query->filterByIdOrganisme(1234); // WHERE ID_ORGANISME = 1234
     * $query->filterByIdOrganisme(array(12, 34)); // WHERE ID_ORGANISME IN (12, 34)
     * $query->filterByIdOrganisme(array('min' => 12)); // WHERE ID_ORGANISME >= 12
     * $query->filterByIdOrganisme(array('max' => 12)); // WHERE ID_ORGANISME <= 12
     * </code>
     *
     * @param     mixed $idOrganisme The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfOrganismeQuery The current query, for fluid interface
     */
    public function filterByIdOrganisme($idOrganisme = null, $comparison = null)
    {
        if (is_array($idOrganisme)) {
            $useMinMax = false;
            if (isset($idOrganisme['min'])) {
                $this->addUsingAlias(PfOrganismePeer::ID_ORGANISME, $idOrganisme['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idOrganisme['max'])) {
                $this->addUsingAlias(PfOrganismePeer::ID_ORGANISME, $idOrganisme['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfOrganismePeer::ID_ORGANISME, $idOrganisme, $comparison);
    }

    /**
     * Filter the query on the ID_ENTITE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntite(1234); // WHERE ID_ENTITE = 1234
     * $query->filterByIdEntite(array(12, 34)); // WHERE ID_ENTITE IN (12, 34)
     * $query->filterByIdEntite(array('min' => 12)); // WHERE ID_ENTITE >= 12
     * $query->filterByIdEntite(array('max' => 12)); // WHERE ID_ENTITE <= 12
     * </code>
     *
     * @param     mixed $idEntite The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfOrganismeQuery The current query, for fluid interface
     */
    public function filterByIdEntite($idEntite = null, $comparison = null)
    {
        if (is_array($idEntite)) {
            $useMinMax = false;
            if (isset($idEntite['min'])) {
                $this->addUsingAlias(PfOrganismePeer::ID_ENTITE, $idEntite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntite['max'])) {
                $this->addUsingAlias(PfOrganismePeer::ID_ENTITE, $idEntite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfOrganismePeer::ID_ENTITE, $idEntite, $comparison);
    }

    /**
     * Filter the query on the DENOMINATION_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByDenominationFr('fooValue');   // WHERE DENOMINATION_FR = 'fooValue'
     * $query->filterByDenominationFr('%fooValue%'); // WHERE DENOMINATION_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denominationFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfOrganismeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PfOrganismePeer::DENOMINATION_FR, $denominationFr, $comparison);
    }

    /**
     * Filter the query on the DENOMINATION_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByDenominationAr('fooValue');   // WHERE DENOMINATION_AR = 'fooValue'
     * $query->filterByDenominationAr('%fooValue%'); // WHERE DENOMINATION_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denominationAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfOrganismeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PfOrganismePeer::DENOMINATION_AR, $denominationAr, $comparison);
    }

    /**
     * Filter the query on the URL_FORM_RECLAMATION column
     *
     * Example usage:
     * <code>
     * $query->filterByUrlFormReclamation('fooValue');   // WHERE URL_FORM_RECLAMATION = 'fooValue'
     * $query->filterByUrlFormReclamation('%fooValue%'); // WHERE URL_FORM_RECLAMATION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $urlFormReclamation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfOrganismeQuery The current query, for fluid interface
     */
    public function filterByUrlFormReclamation($urlFormReclamation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($urlFormReclamation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $urlFormReclamation)) {
                $urlFormReclamation = str_replace('*', '%', $urlFormReclamation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfOrganismePeer::URL_FORM_RECLAMATION, $urlFormReclamation, $comparison);
    }

    /**
     * Filter the query on the CATEGORIE column
     *
     * Example usage:
     * <code>
     * $query->filterByCategorie(1234); // WHERE CATEGORIE = 1234
     * $query->filterByCategorie(array(12, 34)); // WHERE CATEGORIE IN (12, 34)
     * $query->filterByCategorie(array('min' => 12)); // WHERE CATEGORIE >= 12
     * $query->filterByCategorie(array('max' => 12)); // WHERE CATEGORIE <= 12
     * </code>
     *
     * @param     mixed $categorie The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfOrganismeQuery The current query, for fluid interface
     */
    public function filterByCategorie($categorie = null, $comparison = null)
    {
        if (is_array($categorie)) {
            $useMinMax = false;
            if (isset($categorie['min'])) {
                $this->addUsingAlias(PfOrganismePeer::CATEGORIE, $categorie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($categorie['max'])) {
                $this->addUsingAlias(PfOrganismePeer::CATEGORIE, $categorie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfOrganismePeer::CATEGORIE, $categorie, $comparison);
    }

    /**
     * Filter the query on the ID_REGION column
     *
     * Example usage:
     * <code>
     * $query->filterByIdRegion(1234); // WHERE ID_REGION = 1234
     * $query->filterByIdRegion(array(12, 34)); // WHERE ID_REGION IN (12, 34)
     * $query->filterByIdRegion(array('min' => 12)); // WHERE ID_REGION >= 12
     * $query->filterByIdRegion(array('max' => 12)); // WHERE ID_REGION <= 12
     * </code>
     *
     * @param     mixed $idRegion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfOrganismeQuery The current query, for fluid interface
     */
    public function filterByIdRegion($idRegion = null, $comparison = null)
    {
        if (is_array($idRegion)) {
            $useMinMax = false;
            if (isset($idRegion['min'])) {
                $this->addUsingAlias(PfOrganismePeer::ID_REGION, $idRegion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idRegion['max'])) {
                $this->addUsingAlias(PfOrganismePeer::ID_REGION, $idRegion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfOrganismePeer::ID_REGION, $idRegion, $comparison);
    }

    /**
     * Filter the query on the ID_PROVINCE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdProvince(1234); // WHERE ID_PROVINCE = 1234
     * $query->filterByIdProvince(array(12, 34)); // WHERE ID_PROVINCE IN (12, 34)
     * $query->filterByIdProvince(array('min' => 12)); // WHERE ID_PROVINCE >= 12
     * $query->filterByIdProvince(array('max' => 12)); // WHERE ID_PROVINCE <= 12
     * </code>
     *
     * @param     mixed $idProvince The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfOrganismeQuery The current query, for fluid interface
     */
    public function filterByIdProvince($idProvince = null, $comparison = null)
    {
        if (is_array($idProvince)) {
            $useMinMax = false;
            if (isset($idProvince['min'])) {
                $this->addUsingAlias(PfOrganismePeer::ID_PROVINCE, $idProvince['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idProvince['max'])) {
                $this->addUsingAlias(PfOrganismePeer::ID_PROVINCE, $idProvince['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfOrganismePeer::ID_PROVINCE, $idProvince, $comparison);
    }

    /**
     * Filter the query on the ID_COMMUNE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCommune(1234); // WHERE ID_COMMUNE = 1234
     * $query->filterByIdCommune(array(12, 34)); // WHERE ID_COMMUNE IN (12, 34)
     * $query->filterByIdCommune(array('min' => 12)); // WHERE ID_COMMUNE >= 12
     * $query->filterByIdCommune(array('max' => 12)); // WHERE ID_COMMUNE <= 12
     * </code>
     *
     * @param     mixed $idCommune The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfOrganismeQuery The current query, for fluid interface
     */
    public function filterByIdCommune($idCommune = null, $comparison = null)
    {
        if (is_array($idCommune)) {
            $useMinMax = false;
            if (isset($idCommune['min'])) {
                $this->addUsingAlias(PfOrganismePeer::ID_COMMUNE, $idCommune['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCommune['max'])) {
                $this->addUsingAlias(PfOrganismePeer::ID_COMMUNE, $idCommune['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfOrganismePeer::ID_COMMUNE, $idCommune, $comparison);
    }

    /**
     * Filter the query on the MOTS_CLES_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByMotsClesFr('fooValue');   // WHERE MOTS_CLES_FR = 'fooValue'
     * $query->filterByMotsClesFr('%fooValue%'); // WHERE MOTS_CLES_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $motsClesFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfOrganismeQuery The current query, for fluid interface
     */
    public function filterByMotsClesFr($motsClesFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($motsClesFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $motsClesFr)) {
                $motsClesFr = str_replace('*', '%', $motsClesFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfOrganismePeer::MOTS_CLES_FR, $motsClesFr, $comparison);
    }

    /**
     * Filter the query on the MOTS_CLES_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByMotsClesAr('fooValue');   // WHERE MOTS_CLES_AR = 'fooValue'
     * $query->filterByMotsClesAr('%fooValue%'); // WHERE MOTS_CLES_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $motsClesAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfOrganismeQuery The current query, for fluid interface
     */
    public function filterByMotsClesAr($motsClesAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($motsClesAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $motsClesAr)) {
                $motsClesAr = str_replace('*', '%', $motsClesAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfOrganismePeer::MOTS_CLES_AR, $motsClesAr, $comparison);
    }

    /**
     * Filter the query on the TELEPHONES column
     *
     * Example usage:
     * <code>
     * $query->filterByTelephones('fooValue');   // WHERE TELEPHONES = 'fooValue'
     * $query->filterByTelephones('%fooValue%'); // WHERE TELEPHONES LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telephones The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfOrganismeQuery The current query, for fluid interface
     */
    public function filterByTelephones($telephones = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telephones)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telephones)) {
                $telephones = str_replace('*', '%', $telephones);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfOrganismePeer::TELEPHONES, $telephones, $comparison);
    }

    /**
     * Filter the query on the HORAIRES_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByHorairesAr('fooValue');   // WHERE HORAIRES_AR = 'fooValue'
     * $query->filterByHorairesAr('%fooValue%'); // WHERE HORAIRES_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $horairesAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfOrganismeQuery The current query, for fluid interface
     */
    public function filterByHorairesAr($horairesAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($horairesAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $horairesAr)) {
                $horairesAr = str_replace('*', '%', $horairesAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfOrganismePeer::HORAIRES_AR, $horairesAr, $comparison);
    }

    /**
     * Filter the query on the HORAIRES_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByHorairesFr('fooValue');   // WHERE HORAIRES_FR = 'fooValue'
     * $query->filterByHorairesFr('%fooValue%'); // WHERE HORAIRES_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $horairesFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfOrganismeQuery The current query, for fluid interface
     */
    public function filterByHorairesFr($horairesFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($horairesFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $horairesFr)) {
                $horairesFr = str_replace('*', '%', $horairesFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfOrganismePeer::HORAIRES_FR, $horairesFr, $comparison);
    }

    /**
     * Filter the query on the ACTIF column
     *
     * Example usage:
     * <code>
     * $query->filterByActif('fooValue');   // WHERE ACTIF = 'fooValue'
     * $query->filterByActif('%fooValue%'); // WHERE ACTIF LIKE '%fooValue%'
     * </code>
     *
     * @param     string $actif The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfOrganismeQuery The current query, for fluid interface
     */
    public function filterByActif($actif = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($actif)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $actif)) {
                $actif = str_replace('*', '%', $actif);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfOrganismePeer::ACTIF, $actif, $comparison);
    }

    /**
     * Filter the query on the ORDRE column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdre(1234); // WHERE ORDRE = 1234
     * $query->filterByOrdre(array(12, 34)); // WHERE ORDRE IN (12, 34)
     * $query->filterByOrdre(array('min' => 12)); // WHERE ORDRE >= 12
     * $query->filterByOrdre(array('max' => 12)); // WHERE ORDRE <= 12
     * </code>
     *
     * @param     mixed $ordre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfOrganismeQuery The current query, for fluid interface
     */
    public function filterByOrdre($ordre = null, $comparison = null)
    {
        if (is_array($ordre)) {
            $useMinMax = false;
            if (isset($ordre['min'])) {
                $this->addUsingAlias(PfOrganismePeer::ORDRE, $ordre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordre['max'])) {
                $this->addUsingAlias(PfOrganismePeer::ORDRE, $ordre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfOrganismePeer::ORDRE, $ordre, $comparison);
    }

    /**
     * Filter the query on the DATE_MODIFICATION column
     *
     * Example usage:
     * <code>
     * $query->filterByDateModification('2011-03-14'); // WHERE DATE_MODIFICATION = '2011-03-14'
     * $query->filterByDateModification('now'); // WHERE DATE_MODIFICATION = '2011-03-14'
     * $query->filterByDateModification(array('max' => 'yesterday')); // WHERE DATE_MODIFICATION > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateModification The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfOrganismeQuery The current query, for fluid interface
     */
    public function filterByDateModification($dateModification = null, $comparison = null)
    {
        if (is_array($dateModification)) {
            $useMinMax = false;
            if (isset($dateModification['min'])) {
                $this->addUsingAlias(PfOrganismePeer::DATE_MODIFICATION, $dateModification['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModification['max'])) {
                $this->addUsingAlias(PfOrganismePeer::DATE_MODIFICATION, $dateModification['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfOrganismePeer::DATE_MODIFICATION, $dateModification, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   PfOrganisme $pfOrganisme Object to remove from the list of results
     *
     * @return PfOrganismeQuery The current query, for fluid interface
     */
    public function prune($pfOrganisme = null)
    {
        if ($pfOrganisme) {
            $this->addUsingAlias(PfOrganismePeer::ID_ORGANISME, $pfOrganisme->getIdOrganisme(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
