<?php


/**
 * Base class that represents a query for the 'EchangeDestinataire' table.
 *
 * 
 *
 * @method CommonEchangeDestinataireQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonEchangeDestinataireQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonEchangeDestinataireQuery orderByIdEchange($order = Criteria::ASC) Order by the id_echange column
 * @method CommonEchangeDestinataireQuery orderByMailDestinataire($order = Criteria::ASC) Order by the mail_destinataire column
 * @method CommonEchangeDestinataireQuery orderByAr($order = Criteria::ASC) Order by the ar column
 * @method CommonEchangeDestinataireQuery orderByDateAr($order = Criteria::ASC) Order by the date_ar column
 * @method CommonEchangeDestinataireQuery orderByUid($order = Criteria::ASC) Order by the uid column
 * @method CommonEchangeDestinataireQuery orderByTypeAr($order = Criteria::ASC) Order by the type_ar column
 * @method CommonEchangeDestinataireQuery orderByIdInscrit($order = Criteria::ASC) Order by the id_inscrit column
 * @method CommonEchangeDestinataireQuery orderByIdEntreprise($order = Criteria::ASC) Order by the id_entreprise column
 *
 * @method CommonEchangeDestinataireQuery groupById() Group by the id column
 * @method CommonEchangeDestinataireQuery groupByOrganisme() Group by the organisme column
 * @method CommonEchangeDestinataireQuery groupByIdEchange() Group by the id_echange column
 * @method CommonEchangeDestinataireQuery groupByMailDestinataire() Group by the mail_destinataire column
 * @method CommonEchangeDestinataireQuery groupByAr() Group by the ar column
 * @method CommonEchangeDestinataireQuery groupByDateAr() Group by the date_ar column
 * @method CommonEchangeDestinataireQuery groupByUid() Group by the uid column
 * @method CommonEchangeDestinataireQuery groupByTypeAr() Group by the type_ar column
 * @method CommonEchangeDestinataireQuery groupByIdInscrit() Group by the id_inscrit column
 * @method CommonEchangeDestinataireQuery groupByIdEntreprise() Group by the id_entreprise column
 *
 * @method CommonEchangeDestinataireQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonEchangeDestinataireQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonEchangeDestinataireQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonEchangeDestinataireQuery leftJoinCommonEchange($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonEchange relation
 * @method CommonEchangeDestinataireQuery rightJoinCommonEchange($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonEchange relation
 * @method CommonEchangeDestinataireQuery innerJoinCommonEchange($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonEchange relation
 *
 * @method CommonEchangeDestinataire findOne(PropelPDO $con = null) Return the first CommonEchangeDestinataire matching the query
 * @method CommonEchangeDestinataire findOneOrCreate(PropelPDO $con = null) Return the first CommonEchangeDestinataire matching the query, or a new CommonEchangeDestinataire object populated from the query conditions when no match is found
 *
 * @method CommonEchangeDestinataire findOneById(int $id) Return the first CommonEchangeDestinataire filtered by the id column
 * @method CommonEchangeDestinataire findOneByOrganisme(string $organisme) Return the first CommonEchangeDestinataire filtered by the organisme column
 * @method CommonEchangeDestinataire findOneByIdEchange(int $id_echange) Return the first CommonEchangeDestinataire filtered by the id_echange column
 * @method CommonEchangeDestinataire findOneByMailDestinataire(string $mail_destinataire) Return the first CommonEchangeDestinataire filtered by the mail_destinataire column
 * @method CommonEchangeDestinataire findOneByAr(string $ar) Return the first CommonEchangeDestinataire filtered by the ar column
 * @method CommonEchangeDestinataire findOneByDateAr(string $date_ar) Return the first CommonEchangeDestinataire filtered by the date_ar column
 * @method CommonEchangeDestinataire findOneByUid(string $uid) Return the first CommonEchangeDestinataire filtered by the uid column
 * @method CommonEchangeDestinataire findOneByTypeAr(int $type_ar) Return the first CommonEchangeDestinataire filtered by the type_ar column
 * @method CommonEchangeDestinataire findOneByIdInscrit(int $id_inscrit) Return the first CommonEchangeDestinataire filtered by the id_inscrit column
 * @method CommonEchangeDestinataire findOneByIdEntreprise(int $id_entreprise) Return the first CommonEchangeDestinataire filtered by the id_entreprise column
 *
 * @method array findById(int $id) Return CommonEchangeDestinataire objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonEchangeDestinataire objects filtered by the organisme column
 * @method array findByIdEchange(int $id_echange) Return CommonEchangeDestinataire objects filtered by the id_echange column
 * @method array findByMailDestinataire(string $mail_destinataire) Return CommonEchangeDestinataire objects filtered by the mail_destinataire column
 * @method array findByAr(string $ar) Return CommonEchangeDestinataire objects filtered by the ar column
 * @method array findByDateAr(string $date_ar) Return CommonEchangeDestinataire objects filtered by the date_ar column
 * @method array findByUid(string $uid) Return CommonEchangeDestinataire objects filtered by the uid column
 * @method array findByTypeAr(int $type_ar) Return CommonEchangeDestinataire objects filtered by the type_ar column
 * @method array findByIdInscrit(int $id_inscrit) Return CommonEchangeDestinataire objects filtered by the id_inscrit column
 * @method array findByIdEntreprise(int $id_entreprise) Return CommonEchangeDestinataire objects filtered by the id_entreprise column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonEchangeDestinataireQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonEchangeDestinataireQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonEchangeDestinataire', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonEchangeDestinataireQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonEchangeDestinataireQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonEchangeDestinataireQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonEchangeDestinataireQuery) {
            return $criteria;
        }
        $query = new CommonEchangeDestinataireQuery();
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
     * @return   CommonEchangeDestinataire|CommonEchangeDestinataire[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonEchangeDestinatairePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonEchangeDestinatairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonEchangeDestinataire A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `id_echange`, `mail_destinataire`, `ar`, `date_ar`, `uid`, `type_ar`, `id_inscrit`, `id_entreprise` FROM `EchangeDestinataire` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonEchangeDestinataire();
            $obj->hydrate($row);
            CommonEchangeDestinatairePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonEchangeDestinataire|CommonEchangeDestinataire[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonEchangeDestinataire[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonEchangeDestinataireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonEchangeDestinatairePeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonEchangeDestinatairePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonEchangeDestinataireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonEchangeDestinatairePeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonEchangeDestinatairePeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonEchangeDestinataireQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonEchangeDestinatairePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonEchangeDestinatairePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEchangeDestinatairePeer::ID, $id, $comparison);
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
     * @return CommonEchangeDestinataireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEchangeDestinatairePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_echange column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEchange(1234); // WHERE id_echange = 1234
     * $query->filterByIdEchange(array(12, 34)); // WHERE id_echange IN (12, 34)
     * $query->filterByIdEchange(array('min' => 12)); // WHERE id_echange >= 12
     * $query->filterByIdEchange(array('max' => 12)); // WHERE id_echange <= 12
     * </code>
     *
     * @see       filterByCommonEchange()
     *
     * @param     mixed $idEchange The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEchangeDestinataireQuery The current query, for fluid interface
     */
    public function filterByIdEchange($idEchange = null, $comparison = null)
    {
        if (is_array($idEchange)) {
            $useMinMax = false;
            if (isset($idEchange['min'])) {
                $this->addUsingAlias(CommonEchangeDestinatairePeer::ID_ECHANGE, $idEchange['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEchange['max'])) {
                $this->addUsingAlias(CommonEchangeDestinatairePeer::ID_ECHANGE, $idEchange['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEchangeDestinatairePeer::ID_ECHANGE, $idEchange, $comparison);
    }

    /**
     * Filter the query on the mail_destinataire column
     *
     * Example usage:
     * <code>
     * $query->filterByMailDestinataire('fooValue');   // WHERE mail_destinataire = 'fooValue'
     * $query->filterByMailDestinataire('%fooValue%'); // WHERE mail_destinataire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mailDestinataire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEchangeDestinataireQuery The current query, for fluid interface
     */
    public function filterByMailDestinataire($mailDestinataire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mailDestinataire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mailDestinataire)) {
                $mailDestinataire = str_replace('*', '%', $mailDestinataire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEchangeDestinatairePeer::MAIL_DESTINATAIRE, $mailDestinataire, $comparison);
    }

    /**
     * Filter the query on the ar column
     *
     * Example usage:
     * <code>
     * $query->filterByAr('fooValue');   // WHERE ar = 'fooValue'
     * $query->filterByAr('%fooValue%'); // WHERE ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ar The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEchangeDestinataireQuery The current query, for fluid interface
     */
    public function filterByAr($ar = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ar)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ar)) {
                $ar = str_replace('*', '%', $ar);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEchangeDestinatairePeer::AR, $ar, $comparison);
    }

    /**
     * Filter the query on the date_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByDateAr('fooValue');   // WHERE date_ar = 'fooValue'
     * $query->filterByDateAr('%fooValue%'); // WHERE date_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEchangeDestinataireQuery The current query, for fluid interface
     */
    public function filterByDateAr($dateAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateAr)) {
                $dateAr = str_replace('*', '%', $dateAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEchangeDestinatairePeer::DATE_AR, $dateAr, $comparison);
    }

    /**
     * Filter the query on the uid column
     *
     * Example usage:
     * <code>
     * $query->filterByUid('fooValue');   // WHERE uid = 'fooValue'
     * $query->filterByUid('%fooValue%'); // WHERE uid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $uid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEchangeDestinataireQuery The current query, for fluid interface
     */
    public function filterByUid($uid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($uid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $uid)) {
                $uid = str_replace('*', '%', $uid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEchangeDestinatairePeer::UID, $uid, $comparison);
    }

    /**
     * Filter the query on the type_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeAr(1234); // WHERE type_ar = 1234
     * $query->filterByTypeAr(array(12, 34)); // WHERE type_ar IN (12, 34)
     * $query->filterByTypeAr(array('min' => 12)); // WHERE type_ar >= 12
     * $query->filterByTypeAr(array('max' => 12)); // WHERE type_ar <= 12
     * </code>
     *
     * @param     mixed $typeAr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEchangeDestinataireQuery The current query, for fluid interface
     */
    public function filterByTypeAr($typeAr = null, $comparison = null)
    {
        if (is_array($typeAr)) {
            $useMinMax = false;
            if (isset($typeAr['min'])) {
                $this->addUsingAlias(CommonEchangeDestinatairePeer::TYPE_AR, $typeAr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeAr['max'])) {
                $this->addUsingAlias(CommonEchangeDestinatairePeer::TYPE_AR, $typeAr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEchangeDestinatairePeer::TYPE_AR, $typeAr, $comparison);
    }

    /**
     * Filter the query on the id_inscrit column
     *
     * Example usage:
     * <code>
     * $query->filterByIdInscrit(1234); // WHERE id_inscrit = 1234
     * $query->filterByIdInscrit(array(12, 34)); // WHERE id_inscrit IN (12, 34)
     * $query->filterByIdInscrit(array('min' => 12)); // WHERE id_inscrit >= 12
     * $query->filterByIdInscrit(array('max' => 12)); // WHERE id_inscrit <= 12
     * </code>
     *
     * @param     mixed $idInscrit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEchangeDestinataireQuery The current query, for fluid interface
     */
    public function filterByIdInscrit($idInscrit = null, $comparison = null)
    {
        if (is_array($idInscrit)) {
            $useMinMax = false;
            if (isset($idInscrit['min'])) {
                $this->addUsingAlias(CommonEchangeDestinatairePeer::ID_INSCRIT, $idInscrit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idInscrit['max'])) {
                $this->addUsingAlias(CommonEchangeDestinatairePeer::ID_INSCRIT, $idInscrit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEchangeDestinatairePeer::ID_INSCRIT, $idInscrit, $comparison);
    }

    /**
     * Filter the query on the id_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntreprise(1234); // WHERE id_entreprise = 1234
     * $query->filterByIdEntreprise(array(12, 34)); // WHERE id_entreprise IN (12, 34)
     * $query->filterByIdEntreprise(array('min' => 12)); // WHERE id_entreprise >= 12
     * $query->filterByIdEntreprise(array('max' => 12)); // WHERE id_entreprise <= 12
     * </code>
     *
     * @param     mixed $idEntreprise The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEchangeDestinataireQuery The current query, for fluid interface
     */
    public function filterByIdEntreprise($idEntreprise = null, $comparison = null)
    {
        if (is_array($idEntreprise)) {
            $useMinMax = false;
            if (isset($idEntreprise['min'])) {
                $this->addUsingAlias(CommonEchangeDestinatairePeer::ID_ENTREPRISE, $idEntreprise['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntreprise['max'])) {
                $this->addUsingAlias(CommonEchangeDestinatairePeer::ID_ENTREPRISE, $idEntreprise['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEchangeDestinatairePeer::ID_ENTREPRISE, $idEntreprise, $comparison);
    }

    /**
     * Filter the query by a related CommonEchange object
     *
     * @param   CommonEchange|PropelObjectCollection $commonEchange The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonEchangeDestinataireQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonEchange($commonEchange, $comparison = null)
    {
        if ($commonEchange instanceof CommonEchange) {
            return $this
                ->addUsingAlias(CommonEchangeDestinatairePeer::ID_ECHANGE, $commonEchange->getId(), $comparison);
        } elseif ($commonEchange instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonEchangeDestinatairePeer::ID_ECHANGE, $commonEchange->toKeyValue('Id', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonEchange() only accepts arguments of type CommonEchange or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonEchange relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonEchangeDestinataireQuery The current query, for fluid interface
     */
    public function joinCommonEchange($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonEchange');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonEchange');
        }

        return $this;
    }

    /**
     * Use the CommonEchange relation CommonEchange object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonEchangeQuery A secondary query class using the current class as primary query
     */
    public function useCommonEchangeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonEchange($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonEchange', 'CommonEchangeQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonEchangeDestinataire $commonEchangeDestinataire Object to remove from the list of results
     *
     * @return CommonEchangeDestinataireQuery The current query, for fluid interface
     */
    public function prune($commonEchangeDestinataire = null)
    {
        if ($commonEchangeDestinataire) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonEchangeDestinatairePeer::ID), $commonEchangeDestinataire->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonEchangeDestinatairePeer::ORGANISME), $commonEchangeDestinataire->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
