<?php


/**
 * Base class that represents a query for the 'AdresseFacturationJal' table.
 *
 * 
 *
 * @method CommonAdresseFacturationJalQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonAdresseFacturationJalQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonAdresseFacturationJalQuery orderByIdService($order = Criteria::ASC) Order by the id_service column
 * @method CommonAdresseFacturationJalQuery orderByEmailAr($order = Criteria::ASC) Order by the email_ar column
 * @method CommonAdresseFacturationJalQuery orderByTelecopie($order = Criteria::ASC) Order by the telecopie column
 * @method CommonAdresseFacturationJalQuery orderByInformationFacturation($order = Criteria::ASC) Order by the information_facturation column
 * @method CommonAdresseFacturationJalQuery orderByFacturationSip($order = Criteria::ASC) Order by the facturation_sip column
 * @method CommonAdresseFacturationJalQuery orderByIdBlobLogo($order = Criteria::ASC) Order by the id_blob_logo column
 * @method CommonAdresseFacturationJalQuery orderByNomFichier($order = Criteria::ASC) Order by the nom_fichier column
 *
 * @method CommonAdresseFacturationJalQuery groupById() Group by the id column
 * @method CommonAdresseFacturationJalQuery groupByOrganisme() Group by the organisme column
 * @method CommonAdresseFacturationJalQuery groupByIdService() Group by the id_service column
 * @method CommonAdresseFacturationJalQuery groupByEmailAr() Group by the email_ar column
 * @method CommonAdresseFacturationJalQuery groupByTelecopie() Group by the telecopie column
 * @method CommonAdresseFacturationJalQuery groupByInformationFacturation() Group by the information_facturation column
 * @method CommonAdresseFacturationJalQuery groupByFacturationSip() Group by the facturation_sip column
 * @method CommonAdresseFacturationJalQuery groupByIdBlobLogo() Group by the id_blob_logo column
 * @method CommonAdresseFacturationJalQuery groupByNomFichier() Group by the nom_fichier column
 *
 * @method CommonAdresseFacturationJalQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonAdresseFacturationJalQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonAdresseFacturationJalQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonAdresseFacturationJal findOne(PropelPDO $con = null) Return the first CommonAdresseFacturationJal matching the query
 * @method CommonAdresseFacturationJal findOneOrCreate(PropelPDO $con = null) Return the first CommonAdresseFacturationJal matching the query, or a new CommonAdresseFacturationJal object populated from the query conditions when no match is found
 *
 * @method CommonAdresseFacturationJal findOneById(int $id) Return the first CommonAdresseFacturationJal filtered by the id column
 * @method CommonAdresseFacturationJal findOneByOrganisme(string $organisme) Return the first CommonAdresseFacturationJal filtered by the organisme column
 * @method CommonAdresseFacturationJal findOneByIdService(int $id_service) Return the first CommonAdresseFacturationJal filtered by the id_service column
 * @method CommonAdresseFacturationJal findOneByEmailAr(string $email_ar) Return the first CommonAdresseFacturationJal filtered by the email_ar column
 * @method CommonAdresseFacturationJal findOneByTelecopie(string $telecopie) Return the first CommonAdresseFacturationJal filtered by the telecopie column
 * @method CommonAdresseFacturationJal findOneByInformationFacturation(string $information_facturation) Return the first CommonAdresseFacturationJal filtered by the information_facturation column
 * @method CommonAdresseFacturationJal findOneByFacturationSip(string $facturation_sip) Return the first CommonAdresseFacturationJal filtered by the facturation_sip column
 * @method CommonAdresseFacturationJal findOneByIdBlobLogo(int $id_blob_logo) Return the first CommonAdresseFacturationJal filtered by the id_blob_logo column
 * @method CommonAdresseFacturationJal findOneByNomFichier(string $nom_fichier) Return the first CommonAdresseFacturationJal filtered by the nom_fichier column
 *
 * @method array findById(int $id) Return CommonAdresseFacturationJal objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonAdresseFacturationJal objects filtered by the organisme column
 * @method array findByIdService(int $id_service) Return CommonAdresseFacturationJal objects filtered by the id_service column
 * @method array findByEmailAr(string $email_ar) Return CommonAdresseFacturationJal objects filtered by the email_ar column
 * @method array findByTelecopie(string $telecopie) Return CommonAdresseFacturationJal objects filtered by the telecopie column
 * @method array findByInformationFacturation(string $information_facturation) Return CommonAdresseFacturationJal objects filtered by the information_facturation column
 * @method array findByFacturationSip(string $facturation_sip) Return CommonAdresseFacturationJal objects filtered by the facturation_sip column
 * @method array findByIdBlobLogo(int $id_blob_logo) Return CommonAdresseFacturationJal objects filtered by the id_blob_logo column
 * @method array findByNomFichier(string $nom_fichier) Return CommonAdresseFacturationJal objects filtered by the nom_fichier column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonAdresseFacturationJalQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonAdresseFacturationJalQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonAdresseFacturationJal', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonAdresseFacturationJalQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonAdresseFacturationJalQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonAdresseFacturationJalQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonAdresseFacturationJalQuery) {
            return $criteria;
        }
        $query = new CommonAdresseFacturationJalQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query 
                         A Primary key composition: [$id, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonAdresseFacturationJal|CommonAdresseFacturationJal[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonAdresseFacturationJalPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonAdresseFacturationJalPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonAdresseFacturationJal A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `id_service`, `email_ar`, `telecopie`, `information_facturation`, `facturation_sip`, `id_blob_logo`, `nom_fichier` FROM `AdresseFacturationJal` WHERE `id` = :p0 AND `organisme` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonAdresseFacturationJal();
            $obj->hydrate($row);
            CommonAdresseFacturationJalPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonAdresseFacturationJal|CommonAdresseFacturationJal[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonAdresseFacturationJal[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonAdresseFacturationJalQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonAdresseFacturationJalPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonAdresseFacturationJalPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonAdresseFacturationJalQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonAdresseFacturationJalPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonAdresseFacturationJalPeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return CommonAdresseFacturationJalQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonAdresseFacturationJalPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonAdresseFacturationJalPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAdresseFacturationJalPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the organisme column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisme('fooValue');   // WHERE organisme = 'fooValue'
     * $query->filterByOrganisme('%fooValue%'); // WHERE organisme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organisme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAdresseFacturationJalQuery The current query, for fluid interface
     */
    public function filterByOrganisme($organisme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organisme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organisme)) {
                $organisme = str_replace('*', '%', $organisme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAdresseFacturationJalPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_service column
     *
     * Example usage:
     * <code>
     * $query->filterByIdService(1234); // WHERE id_service = 1234
     * $query->filterByIdService(array(12, 34)); // WHERE id_service IN (12, 34)
     * $query->filterByIdService(array('min' => 12)); // WHERE id_service >= 12
     * $query->filterByIdService(array('max' => 12)); // WHERE id_service <= 12
     * </code>
     *
     * @param     mixed $idService The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAdresseFacturationJalQuery The current query, for fluid interface
     */
    public function filterByIdService($idService = null, $comparison = null)
    {
        if (is_array($idService)) {
            $useMinMax = false;
            if (isset($idService['min'])) {
                $this->addUsingAlias(CommonAdresseFacturationJalPeer::ID_SERVICE, $idService['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idService['max'])) {
                $this->addUsingAlias(CommonAdresseFacturationJalPeer::ID_SERVICE, $idService['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAdresseFacturationJalPeer::ID_SERVICE, $idService, $comparison);
    }

    /**
     * Filter the query on the email_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByEmailAr('fooValue');   // WHERE email_ar = 'fooValue'
     * $query->filterByEmailAr('%fooValue%'); // WHERE email_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $emailAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAdresseFacturationJalQuery The current query, for fluid interface
     */
    public function filterByEmailAr($emailAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($emailAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $emailAr)) {
                $emailAr = str_replace('*', '%', $emailAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAdresseFacturationJalPeer::EMAIL_AR, $emailAr, $comparison);
    }

    /**
     * Filter the query on the telecopie column
     *
     * Example usage:
     * <code>
     * $query->filterByTelecopie('fooValue');   // WHERE telecopie = 'fooValue'
     * $query->filterByTelecopie('%fooValue%'); // WHERE telecopie LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telecopie The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAdresseFacturationJalQuery The current query, for fluid interface
     */
    public function filterByTelecopie($telecopie = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telecopie)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telecopie)) {
                $telecopie = str_replace('*', '%', $telecopie);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAdresseFacturationJalPeer::TELECOPIE, $telecopie, $comparison);
    }

    /**
     * Filter the query on the information_facturation column
     *
     * Example usage:
     * <code>
     * $query->filterByInformationFacturation('fooValue');   // WHERE information_facturation = 'fooValue'
     * $query->filterByInformationFacturation('%fooValue%'); // WHERE information_facturation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $informationFacturation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAdresseFacturationJalQuery The current query, for fluid interface
     */
    public function filterByInformationFacturation($informationFacturation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($informationFacturation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $informationFacturation)) {
                $informationFacturation = str_replace('*', '%', $informationFacturation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAdresseFacturationJalPeer::INFORMATION_FACTURATION, $informationFacturation, $comparison);
    }

    /**
     * Filter the query on the facturation_sip column
     *
     * Example usage:
     * <code>
     * $query->filterByFacturationSip('fooValue');   // WHERE facturation_sip = 'fooValue'
     * $query->filterByFacturationSip('%fooValue%'); // WHERE facturation_sip LIKE '%fooValue%'
     * </code>
     *
     * @param     string $facturationSip The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAdresseFacturationJalQuery The current query, for fluid interface
     */
    public function filterByFacturationSip($facturationSip = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($facturationSip)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $facturationSip)) {
                $facturationSip = str_replace('*', '%', $facturationSip);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAdresseFacturationJalPeer::FACTURATION_SIP, $facturationSip, $comparison);
    }

    /**
     * Filter the query on the id_blob_logo column
     *
     * Example usage:
     * <code>
     * $query->filterByIdBlobLogo(1234); // WHERE id_blob_logo = 1234
     * $query->filterByIdBlobLogo(array(12, 34)); // WHERE id_blob_logo IN (12, 34)
     * $query->filterByIdBlobLogo(array('min' => 12)); // WHERE id_blob_logo >= 12
     * $query->filterByIdBlobLogo(array('max' => 12)); // WHERE id_blob_logo <= 12
     * </code>
     *
     * @param     mixed $idBlobLogo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAdresseFacturationJalQuery The current query, for fluid interface
     */
    public function filterByIdBlobLogo($idBlobLogo = null, $comparison = null)
    {
        if (is_array($idBlobLogo)) {
            $useMinMax = false;
            if (isset($idBlobLogo['min'])) {
                $this->addUsingAlias(CommonAdresseFacturationJalPeer::ID_BLOB_LOGO, $idBlobLogo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlobLogo['max'])) {
                $this->addUsingAlias(CommonAdresseFacturationJalPeer::ID_BLOB_LOGO, $idBlobLogo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAdresseFacturationJalPeer::ID_BLOB_LOGO, $idBlobLogo, $comparison);
    }

    /**
     * Filter the query on the nom_fichier column
     *
     * Example usage:
     * <code>
     * $query->filterByNomFichier('fooValue');   // WHERE nom_fichier = 'fooValue'
     * $query->filterByNomFichier('%fooValue%'); // WHERE nom_fichier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomFichier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAdresseFacturationJalQuery The current query, for fluid interface
     */
    public function filterByNomFichier($nomFichier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomFichier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomFichier)) {
                $nomFichier = str_replace('*', '%', $nomFichier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAdresseFacturationJalPeer::NOM_FICHIER, $nomFichier, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonAdresseFacturationJal $commonAdresseFacturationJal Object to remove from the list of results
     *
     * @return CommonAdresseFacturationJalQuery The current query, for fluid interface
     */
    public function prune($commonAdresseFacturationJal = null)
    {
        if ($commonAdresseFacturationJal) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonAdresseFacturationJalPeer::ID), $commonAdresseFacturationJal->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonAdresseFacturationJalPeer::ORGANISME), $commonAdresseFacturationJal->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
