<?php


/**
 * Base class that represents a query for the 't_entite_demandeur' table.
 *
 * 
 *
 * @method TEntiteDemandeurQuery orderByIdEntiteDemandeur($order = Criteria::ASC) Order by the ID_ENTITE_DEMANDEUR column
 * @method TEntiteDemandeurQuery orderByDenominationFr($order = Criteria::ASC) Order by the DENOMINATION_FR column
 * @method TEntiteDemandeurQuery orderByDenominationAr($order = Criteria::ASC) Order by the DENOMINATION_AR column
 * @method TEntiteDemandeurQuery orderByMail($order = Criteria::ASC) Order by the mail column
 * @method TEntiteDemandeurQuery orderByTelephone($order = Criteria::ASC) Order by the telephone column
 * @method TEntiteDemandeurQuery orderByFax($order = Criteria::ASC) Order by the fax column
 * @method TEntiteDemandeurQuery orderByAdresse($order = Criteria::ASC) Order by the adresse column
 * @method TEntiteDemandeurQuery orderByAdresse2($order = Criteria::ASC) Order by the adresse2 column
 * @method TEntiteDemandeurQuery orderByCp($order = Criteria::ASC) Order by the cp column
 * @method TEntiteDemandeurQuery orderByVille($order = Criteria::ASC) Order by the ville column
 * @method TEntiteDemandeurQuery orderByPathFr($order = Criteria::ASC) Order by the path_fr column
 * @method TEntiteDemandeurQuery orderByPathAr($order = Criteria::ASC) Order by the path_ar column
 * @method TEntiteDemandeurQuery orderByIdRegion($order = Criteria::ASC) Order by the ID_REGION column
 * @method TEntiteDemandeurQuery orderByIdProvince($order = Criteria::ASC) Order by the ID_PROVINCE column
 * @method TEntiteDemandeurQuery orderByIdCommune($order = Criteria::ASC) Order by the ID_COMMUNE column
 * @method TEntiteDemandeurQuery orderByCommune($order = Criteria::ASC) Order by the COMMUNE column
 * @method TEntiteDemandeurQuery orderByIdPays($order = Criteria::ASC) Order by the ID_PAYS column
 * @method TEntiteDemandeurQuery orderBySigleFr($order = Criteria::ASC) Order by the SIGLE_FR column
 * @method TEntiteDemandeurQuery orderBySigleAr($order = Criteria::ASC) Order by the SIGLE_AR column
 * @method TEntiteDemandeurQuery orderByPathSigleFr($order = Criteria::ASC) Order by the PATH_SIGLE_FR column
 * @method TEntiteDemandeurQuery orderByPathSigleAr($order = Criteria::ASC) Order by the PATH_SIGLE_AR column
 * @method TEntiteDemandeurQuery orderByIdExterne($order = Criteria::ASC) Order by the ID_EXTERNE column
 *
 * @method TEntiteDemandeurQuery groupByIdEntiteDemandeur() Group by the ID_ENTITE_DEMANDEUR column
 * @method TEntiteDemandeurQuery groupByDenominationFr() Group by the DENOMINATION_FR column
 * @method TEntiteDemandeurQuery groupByDenominationAr() Group by the DENOMINATION_AR column
 * @method TEntiteDemandeurQuery groupByMail() Group by the mail column
 * @method TEntiteDemandeurQuery groupByTelephone() Group by the telephone column
 * @method TEntiteDemandeurQuery groupByFax() Group by the fax column
 * @method TEntiteDemandeurQuery groupByAdresse() Group by the adresse column
 * @method TEntiteDemandeurQuery groupByAdresse2() Group by the adresse2 column
 * @method TEntiteDemandeurQuery groupByCp() Group by the cp column
 * @method TEntiteDemandeurQuery groupByVille() Group by the ville column
 * @method TEntiteDemandeurQuery groupByPathFr() Group by the path_fr column
 * @method TEntiteDemandeurQuery groupByPathAr() Group by the path_ar column
 * @method TEntiteDemandeurQuery groupByIdRegion() Group by the ID_REGION column
 * @method TEntiteDemandeurQuery groupByIdProvince() Group by the ID_PROVINCE column
 * @method TEntiteDemandeurQuery groupByIdCommune() Group by the ID_COMMUNE column
 * @method TEntiteDemandeurQuery groupByCommune() Group by the COMMUNE column
 * @method TEntiteDemandeurQuery groupByIdPays() Group by the ID_PAYS column
 * @method TEntiteDemandeurQuery groupBySigleFr() Group by the SIGLE_FR column
 * @method TEntiteDemandeurQuery groupBySigleAr() Group by the SIGLE_AR column
 * @method TEntiteDemandeurQuery groupByPathSigleFr() Group by the PATH_SIGLE_FR column
 * @method TEntiteDemandeurQuery groupByPathSigleAr() Group by the PATH_SIGLE_AR column
 * @method TEntiteDemandeurQuery groupByIdExterne() Group by the ID_EXTERNE column
 *
 * @method TEntiteDemandeurQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TEntiteDemandeurQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TEntiteDemandeurQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TEntiteDemandeur findOne(PropelPDO $con = null) Return the first TEntiteDemandeur matching the query
 * @method TEntiteDemandeur findOneOrCreate(PropelPDO $con = null) Return the first TEntiteDemandeur matching the query, or a new TEntiteDemandeur object populated from the query conditions when no match is found
 *
 * @method TEntiteDemandeur findOneByDenominationFr(string $DENOMINATION_FR) Return the first TEntiteDemandeur filtered by the DENOMINATION_FR column
 * @method TEntiteDemandeur findOneByDenominationAr(string $DENOMINATION_AR) Return the first TEntiteDemandeur filtered by the DENOMINATION_AR column
 * @method TEntiteDemandeur findOneByMail(string $mail) Return the first TEntiteDemandeur filtered by the mail column
 * @method TEntiteDemandeur findOneByTelephone(string $telephone) Return the first TEntiteDemandeur filtered by the telephone column
 * @method TEntiteDemandeur findOneByFax(string $fax) Return the first TEntiteDemandeur filtered by the fax column
 * @method TEntiteDemandeur findOneByAdresse(string $adresse) Return the first TEntiteDemandeur filtered by the adresse column
 * @method TEntiteDemandeur findOneByAdresse2(string $adresse2) Return the first TEntiteDemandeur filtered by the adresse2 column
 * @method TEntiteDemandeur findOneByCp(string $cp) Return the first TEntiteDemandeur filtered by the cp column
 * @method TEntiteDemandeur findOneByVille(string $ville) Return the first TEntiteDemandeur filtered by the ville column
 * @method TEntiteDemandeur findOneByPathFr(string $path_fr) Return the first TEntiteDemandeur filtered by the path_fr column
 * @method TEntiteDemandeur findOneByPathAr(string $path_ar) Return the first TEntiteDemandeur filtered by the path_ar column
 * @method TEntiteDemandeur findOneByIdRegion(int $ID_REGION) Return the first TEntiteDemandeur filtered by the ID_REGION column
 * @method TEntiteDemandeur findOneByIdProvince(int $ID_PROVINCE) Return the first TEntiteDemandeur filtered by the ID_PROVINCE column
 * @method TEntiteDemandeur findOneByIdCommune(int $ID_COMMUNE) Return the first TEntiteDemandeur filtered by the ID_COMMUNE column
 * @method TEntiteDemandeur findOneByCommune(string $COMMUNE) Return the first TEntiteDemandeur filtered by the COMMUNE column
 * @method TEntiteDemandeur findOneByIdPays(int $ID_PAYS) Return the first TEntiteDemandeur filtered by the ID_PAYS column
 * @method TEntiteDemandeur findOneBySigleFr(string $SIGLE_FR) Return the first TEntiteDemandeur filtered by the SIGLE_FR column
 * @method TEntiteDemandeur findOneBySigleAr(string $SIGLE_AR) Return the first TEntiteDemandeur filtered by the SIGLE_AR column
 * @method TEntiteDemandeur findOneByPathSigleFr(string $PATH_SIGLE_FR) Return the first TEntiteDemandeur filtered by the PATH_SIGLE_FR column
 * @method TEntiteDemandeur findOneByPathSigleAr(string $PATH_SIGLE_AR) Return the first TEntiteDemandeur filtered by the PATH_SIGLE_AR column
 * @method TEntiteDemandeur findOneByIdExterne(string $ID_EXTERNE) Return the first TEntiteDemandeur filtered by the ID_EXTERNE column
 *
 * @method array findByIdEntiteDemandeur(int $ID_ENTITE_DEMANDEUR) Return TEntiteDemandeur objects filtered by the ID_ENTITE_DEMANDEUR column
 * @method array findByDenominationFr(string $DENOMINATION_FR) Return TEntiteDemandeur objects filtered by the DENOMINATION_FR column
 * @method array findByDenominationAr(string $DENOMINATION_AR) Return TEntiteDemandeur objects filtered by the DENOMINATION_AR column
 * @method array findByMail(string $mail) Return TEntiteDemandeur objects filtered by the mail column
 * @method array findByTelephone(string $telephone) Return TEntiteDemandeur objects filtered by the telephone column
 * @method array findByFax(string $fax) Return TEntiteDemandeur objects filtered by the fax column
 * @method array findByAdresse(string $adresse) Return TEntiteDemandeur objects filtered by the adresse column
 * @method array findByAdresse2(string $adresse2) Return TEntiteDemandeur objects filtered by the adresse2 column
 * @method array findByCp(string $cp) Return TEntiteDemandeur objects filtered by the cp column
 * @method array findByVille(string $ville) Return TEntiteDemandeur objects filtered by the ville column
 * @method array findByPathFr(string $path_fr) Return TEntiteDemandeur objects filtered by the path_fr column
 * @method array findByPathAr(string $path_ar) Return TEntiteDemandeur objects filtered by the path_ar column
 * @method array findByIdRegion(int $ID_REGION) Return TEntiteDemandeur objects filtered by the ID_REGION column
 * @method array findByIdProvince(int $ID_PROVINCE) Return TEntiteDemandeur objects filtered by the ID_PROVINCE column
 * @method array findByIdCommune(int $ID_COMMUNE) Return TEntiteDemandeur objects filtered by the ID_COMMUNE column
 * @method array findByCommune(string $COMMUNE) Return TEntiteDemandeur objects filtered by the COMMUNE column
 * @method array findByIdPays(int $ID_PAYS) Return TEntiteDemandeur objects filtered by the ID_PAYS column
 * @method array findBySigleFr(string $SIGLE_FR) Return TEntiteDemandeur objects filtered by the SIGLE_FR column
 * @method array findBySigleAr(string $SIGLE_AR) Return TEntiteDemandeur objects filtered by the SIGLE_AR column
 * @method array findByPathSigleFr(string $PATH_SIGLE_FR) Return TEntiteDemandeur objects filtered by the PATH_SIGLE_FR column
 * @method array findByPathSigleAr(string $PATH_SIGLE_AR) Return TEntiteDemandeur objects filtered by the PATH_SIGLE_AR column
 * @method array findByIdExterne(string $ID_EXTERNE) Return TEntiteDemandeur objects filtered by the ID_EXTERNE column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTEntiteDemandeurQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTEntiteDemandeurQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'TEntiteDemandeur', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TEntiteDemandeurQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TEntiteDemandeurQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TEntiteDemandeurQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TEntiteDemandeurQuery) {
            return $criteria;
        }
        $query = new TEntiteDemandeurQuery();
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
     * @return   TEntiteDemandeur|TEntiteDemandeur[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TEntiteDemandeurPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TEntiteDemandeurPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TEntiteDemandeur A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdEntiteDemandeur($key, $con = null)
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
     * @return                 TEntiteDemandeur A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_ENTITE_DEMANDEUR`, `DENOMINATION_FR`, `DENOMINATION_AR`, `mail`, `telephone`, `fax`, `adresse`, `adresse2`, `cp`, `ville`, `path_fr`, `path_ar`, `ID_REGION`, `ID_PROVINCE`, `ID_COMMUNE`, `COMMUNE`, `ID_PAYS`, `SIGLE_FR`, `SIGLE_AR`, `PATH_SIGLE_FR`, `PATH_SIGLE_AR`, `ID_EXTERNE` FROM `t_entite_demandeur` WHERE `ID_ENTITE_DEMANDEUR` = :p0';
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
            $obj = new TEntiteDemandeur();
            $obj->hydrate($row);
            TEntiteDemandeurPeer::addInstanceToPool($obj, (string) $key);
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
     * @return TEntiteDemandeur|TEntiteDemandeur[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TEntiteDemandeur[]|mixed the list of results, formatted by the current formatter
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
     * @return TEntiteDemandeurQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TEntiteDemandeurPeer::ID_ENTITE_DEMANDEUR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TEntiteDemandeurQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TEntiteDemandeurPeer::ID_ENTITE_DEMANDEUR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID_ENTITE_DEMANDEUR column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntiteDemandeur(1234); // WHERE ID_ENTITE_DEMANDEUR = 1234
     * $query->filterByIdEntiteDemandeur(array(12, 34)); // WHERE ID_ENTITE_DEMANDEUR IN (12, 34)
     * $query->filterByIdEntiteDemandeur(array('min' => 12)); // WHERE ID_ENTITE_DEMANDEUR >= 12
     * $query->filterByIdEntiteDemandeur(array('max' => 12)); // WHERE ID_ENTITE_DEMANDEUR <= 12
     * </code>
     *
     * @param     mixed $idEntiteDemandeur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEntiteDemandeurQuery The current query, for fluid interface
     */
    public function filterByIdEntiteDemandeur($idEntiteDemandeur = null, $comparison = null)
    {
        if (is_array($idEntiteDemandeur)) {
            $useMinMax = false;
            if (isset($idEntiteDemandeur['min'])) {
                $this->addUsingAlias(TEntiteDemandeurPeer::ID_ENTITE_DEMANDEUR, $idEntiteDemandeur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntiteDemandeur['max'])) {
                $this->addUsingAlias(TEntiteDemandeurPeer::ID_ENTITE_DEMANDEUR, $idEntiteDemandeur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TEntiteDemandeurPeer::ID_ENTITE_DEMANDEUR, $idEntiteDemandeur, $comparison);
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
     * @return TEntiteDemandeurQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TEntiteDemandeurPeer::DENOMINATION_FR, $denominationFr, $comparison);
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
     * @return TEntiteDemandeurQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TEntiteDemandeurPeer::DENOMINATION_AR, $denominationAr, $comparison);
    }

    /**
     * Filter the query on the mail column
     *
     * Example usage:
     * <code>
     * $query->filterByMail('fooValue');   // WHERE mail = 'fooValue'
     * $query->filterByMail('%fooValue%'); // WHERE mail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEntiteDemandeurQuery The current query, for fluid interface
     */
    public function filterByMail($mail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mail)) {
                $mail = str_replace('*', '%', $mail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TEntiteDemandeurPeer::MAIL, $mail, $comparison);
    }

    /**
     * Filter the query on the telephone column
     *
     * Example usage:
     * <code>
     * $query->filterByTelephone('fooValue');   // WHERE telephone = 'fooValue'
     * $query->filterByTelephone('%fooValue%'); // WHERE telephone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telephone The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEntiteDemandeurQuery The current query, for fluid interface
     */
    public function filterByTelephone($telephone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telephone)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telephone)) {
                $telephone = str_replace('*', '%', $telephone);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TEntiteDemandeurPeer::TELEPHONE, $telephone, $comparison);
    }

    /**
     * Filter the query on the fax column
     *
     * Example usage:
     * <code>
     * $query->filterByFax('fooValue');   // WHERE fax = 'fooValue'
     * $query->filterByFax('%fooValue%'); // WHERE fax LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fax The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEntiteDemandeurQuery The current query, for fluid interface
     */
    public function filterByFax($fax = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fax)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fax)) {
                $fax = str_replace('*', '%', $fax);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TEntiteDemandeurPeer::FAX, $fax, $comparison);
    }

    /**
     * Filter the query on the adresse column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresse('fooValue');   // WHERE adresse = 'fooValue'
     * $query->filterByAdresse('%fooValue%'); // WHERE adresse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEntiteDemandeurQuery The current query, for fluid interface
     */
    public function filterByAdresse($adresse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresse)) {
                $adresse = str_replace('*', '%', $adresse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TEntiteDemandeurPeer::ADRESSE, $adresse, $comparison);
    }

    /**
     * Filter the query on the adresse2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresse2('fooValue');   // WHERE adresse2 = 'fooValue'
     * $query->filterByAdresse2('%fooValue%'); // WHERE adresse2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresse2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEntiteDemandeurQuery The current query, for fluid interface
     */
    public function filterByAdresse2($adresse2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresse2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresse2)) {
                $adresse2 = str_replace('*', '%', $adresse2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TEntiteDemandeurPeer::ADRESSE2, $adresse2, $comparison);
    }

    /**
     * Filter the query on the cp column
     *
     * Example usage:
     * <code>
     * $query->filterByCp('fooValue');   // WHERE cp = 'fooValue'
     * $query->filterByCp('%fooValue%'); // WHERE cp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEntiteDemandeurQuery The current query, for fluid interface
     */
    public function filterByCp($cp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cp)) {
                $cp = str_replace('*', '%', $cp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TEntiteDemandeurPeer::CP, $cp, $comparison);
    }

    /**
     * Filter the query on the ville column
     *
     * Example usage:
     * <code>
     * $query->filterByVille('fooValue');   // WHERE ville = 'fooValue'
     * $query->filterByVille('%fooValue%'); // WHERE ville LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ville The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEntiteDemandeurQuery The current query, for fluid interface
     */
    public function filterByVille($ville = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ville)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ville)) {
                $ville = str_replace('*', '%', $ville);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TEntiteDemandeurPeer::VILLE, $ville, $comparison);
    }

    /**
     * Filter the query on the path_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByPathFr('fooValue');   // WHERE path_fr = 'fooValue'
     * $query->filterByPathFr('%fooValue%'); // WHERE path_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pathFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEntiteDemandeurQuery The current query, for fluid interface
     */
    public function filterByPathFr($pathFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pathFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pathFr)) {
                $pathFr = str_replace('*', '%', $pathFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TEntiteDemandeurPeer::PATH_FR, $pathFr, $comparison);
    }

    /**
     * Filter the query on the path_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByPathAr('fooValue');   // WHERE path_ar = 'fooValue'
     * $query->filterByPathAr('%fooValue%'); // WHERE path_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pathAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEntiteDemandeurQuery The current query, for fluid interface
     */
    public function filterByPathAr($pathAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pathAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pathAr)) {
                $pathAr = str_replace('*', '%', $pathAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TEntiteDemandeurPeer::PATH_AR, $pathAr, $comparison);
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
     * @return TEntiteDemandeurQuery The current query, for fluid interface
     */
    public function filterByIdRegion($idRegion = null, $comparison = null)
    {
        if (is_array($idRegion)) {
            $useMinMax = false;
            if (isset($idRegion['min'])) {
                $this->addUsingAlias(TEntiteDemandeurPeer::ID_REGION, $idRegion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idRegion['max'])) {
                $this->addUsingAlias(TEntiteDemandeurPeer::ID_REGION, $idRegion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TEntiteDemandeurPeer::ID_REGION, $idRegion, $comparison);
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
     * @return TEntiteDemandeurQuery The current query, for fluid interface
     */
    public function filterByIdProvince($idProvince = null, $comparison = null)
    {
        if (is_array($idProvince)) {
            $useMinMax = false;
            if (isset($idProvince['min'])) {
                $this->addUsingAlias(TEntiteDemandeurPeer::ID_PROVINCE, $idProvince['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idProvince['max'])) {
                $this->addUsingAlias(TEntiteDemandeurPeer::ID_PROVINCE, $idProvince['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TEntiteDemandeurPeer::ID_PROVINCE, $idProvince, $comparison);
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
     * @return TEntiteDemandeurQuery The current query, for fluid interface
     */
    public function filterByIdCommune($idCommune = null, $comparison = null)
    {
        if (is_array($idCommune)) {
            $useMinMax = false;
            if (isset($idCommune['min'])) {
                $this->addUsingAlias(TEntiteDemandeurPeer::ID_COMMUNE, $idCommune['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCommune['max'])) {
                $this->addUsingAlias(TEntiteDemandeurPeer::ID_COMMUNE, $idCommune['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TEntiteDemandeurPeer::ID_COMMUNE, $idCommune, $comparison);
    }

    /**
     * Filter the query on the COMMUNE column
     *
     * Example usage:
     * <code>
     * $query->filterByCommune('fooValue');   // WHERE COMMUNE = 'fooValue'
     * $query->filterByCommune('%fooValue%'); // WHERE COMMUNE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commune The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEntiteDemandeurQuery The current query, for fluid interface
     */
    public function filterByCommune($commune = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commune)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commune)) {
                $commune = str_replace('*', '%', $commune);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TEntiteDemandeurPeer::COMMUNE, $commune, $comparison);
    }

    /**
     * Filter the query on the ID_PAYS column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPays(1234); // WHERE ID_PAYS = 1234
     * $query->filterByIdPays(array(12, 34)); // WHERE ID_PAYS IN (12, 34)
     * $query->filterByIdPays(array('min' => 12)); // WHERE ID_PAYS >= 12
     * $query->filterByIdPays(array('max' => 12)); // WHERE ID_PAYS <= 12
     * </code>
     *
     * @param     mixed $idPays The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEntiteDemandeurQuery The current query, for fluid interface
     */
    public function filterByIdPays($idPays = null, $comparison = null)
    {
        if (is_array($idPays)) {
            $useMinMax = false;
            if (isset($idPays['min'])) {
                $this->addUsingAlias(TEntiteDemandeurPeer::ID_PAYS, $idPays['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPays['max'])) {
                $this->addUsingAlias(TEntiteDemandeurPeer::ID_PAYS, $idPays['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TEntiteDemandeurPeer::ID_PAYS, $idPays, $comparison);
    }

    /**
     * Filter the query on the SIGLE_FR column
     *
     * Example usage:
     * <code>
     * $query->filterBySigleFr('fooValue');   // WHERE SIGLE_FR = 'fooValue'
     * $query->filterBySigleFr('%fooValue%'); // WHERE SIGLE_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sigleFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEntiteDemandeurQuery The current query, for fluid interface
     */
    public function filterBySigleFr($sigleFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sigleFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sigleFr)) {
                $sigleFr = str_replace('*', '%', $sigleFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TEntiteDemandeurPeer::SIGLE_FR, $sigleFr, $comparison);
    }

    /**
     * Filter the query on the SIGLE_AR column
     *
     * Example usage:
     * <code>
     * $query->filterBySigleAr('fooValue');   // WHERE SIGLE_AR = 'fooValue'
     * $query->filterBySigleAr('%fooValue%'); // WHERE SIGLE_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sigleAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEntiteDemandeurQuery The current query, for fluid interface
     */
    public function filterBySigleAr($sigleAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sigleAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sigleAr)) {
                $sigleAr = str_replace('*', '%', $sigleAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TEntiteDemandeurPeer::SIGLE_AR, $sigleAr, $comparison);
    }

    /**
     * Filter the query on the PATH_SIGLE_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByPathSigleFr('fooValue');   // WHERE PATH_SIGLE_FR = 'fooValue'
     * $query->filterByPathSigleFr('%fooValue%'); // WHERE PATH_SIGLE_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pathSigleFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEntiteDemandeurQuery The current query, for fluid interface
     */
    public function filterByPathSigleFr($pathSigleFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pathSigleFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pathSigleFr)) {
                $pathSigleFr = str_replace('*', '%', $pathSigleFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TEntiteDemandeurPeer::PATH_SIGLE_FR, $pathSigleFr, $comparison);
    }

    /**
     * Filter the query on the PATH_SIGLE_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByPathSigleAr('fooValue');   // WHERE PATH_SIGLE_AR = 'fooValue'
     * $query->filterByPathSigleAr('%fooValue%'); // WHERE PATH_SIGLE_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pathSigleAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEntiteDemandeurQuery The current query, for fluid interface
     */
    public function filterByPathSigleAr($pathSigleAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pathSigleAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pathSigleAr)) {
                $pathSigleAr = str_replace('*', '%', $pathSigleAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TEntiteDemandeurPeer::PATH_SIGLE_AR, $pathSigleAr, $comparison);
    }

    /**
     * Filter the query on the ID_EXTERNE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdExterne('fooValue');   // WHERE ID_EXTERNE = 'fooValue'
     * $query->filterByIdExterne('%fooValue%'); // WHERE ID_EXTERNE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idExterne The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEntiteDemandeurQuery The current query, for fluid interface
     */
    public function filterByIdExterne($idExterne = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idExterne)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idExterne)) {
                $idExterne = str_replace('*', '%', $idExterne);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TEntiteDemandeurPeer::ID_EXTERNE, $idExterne, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   TEntiteDemandeur $tEntiteDemandeur Object to remove from the list of results
     *
     * @return TEntiteDemandeurQuery The current query, for fluid interface
     */
    public function prune($tEntiteDemandeur = null)
    {
        if ($tEntiteDemandeur) {
            $this->addUsingAlias(TEntiteDemandeurPeer::ID_ENTITE_DEMANDEUR, $tEntiteDemandeur->getIdEntiteDemandeur(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
