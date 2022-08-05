<?php


/**
 * Base class that represents a query for the 'Annonce_Press' table.
 *
 * 
 *
 * @method CommonAnnoncePressQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonAnnoncePressQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonAnnoncePressQuery orderByLibelleType($order = Criteria::ASC) Order by the libelle_type column
 * @method CommonAnnoncePressQuery orderByDateCreation($order = Criteria::ASC) Order by the date_creation column
 * @method CommonAnnoncePressQuery orderByObjet($order = Criteria::ASC) Order by the objet column
 * @method CommonAnnoncePressQuery orderByTexte($order = Criteria::ASC) Order by the texte column
 * @method CommonAnnoncePressQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 * @method CommonAnnoncePressQuery orderByOptionEnvoi($order = Criteria::ASC) Order by the option_envoi column
 * @method CommonAnnoncePressQuery orderByIdDestPress($order = Criteria::ASC) Order by the id_Dest_Press column
 * @method CommonAnnoncePressQuery orderByIdAdresseFacturation($order = Criteria::ASC) Order by the id_adresse_facturation column
 *
 * @method CommonAnnoncePressQuery groupById() Group by the id column
 * @method CommonAnnoncePressQuery groupByOrganisme() Group by the organisme column
 * @method CommonAnnoncePressQuery groupByLibelleType() Group by the libelle_type column
 * @method CommonAnnoncePressQuery groupByDateCreation() Group by the date_creation column
 * @method CommonAnnoncePressQuery groupByObjet() Group by the objet column
 * @method CommonAnnoncePressQuery groupByTexte() Group by the texte column
 * @method CommonAnnoncePressQuery groupByConsultationRef() Group by the consultation_ref column
 * @method CommonAnnoncePressQuery groupByOptionEnvoi() Group by the option_envoi column
 * @method CommonAnnoncePressQuery groupByIdDestPress() Group by the id_Dest_Press column
 * @method CommonAnnoncePressQuery groupByIdAdresseFacturation() Group by the id_adresse_facturation column
 *
 * @method CommonAnnoncePressQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonAnnoncePressQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonAnnoncePressQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonAnnoncePress findOne(PropelPDO $con = null) Return the first CommonAnnoncePress matching the query
 * @method CommonAnnoncePress findOneOrCreate(PropelPDO $con = null) Return the first CommonAnnoncePress matching the query, or a new CommonAnnoncePress object populated from the query conditions when no match is found
 *
 * @method CommonAnnoncePress findOneById(int $id) Return the first CommonAnnoncePress filtered by the id column
 * @method CommonAnnoncePress findOneByOrganisme(string $organisme) Return the first CommonAnnoncePress filtered by the organisme column
 * @method CommonAnnoncePress findOneByLibelleType(string $libelle_type) Return the first CommonAnnoncePress filtered by the libelle_type column
 * @method CommonAnnoncePress findOneByDateCreation(string $date_creation) Return the first CommonAnnoncePress filtered by the date_creation column
 * @method CommonAnnoncePress findOneByObjet(string $objet) Return the first CommonAnnoncePress filtered by the objet column
 * @method CommonAnnoncePress findOneByTexte(string $texte) Return the first CommonAnnoncePress filtered by the texte column
 * @method CommonAnnoncePress findOneByConsultationRef(int $consultation_ref) Return the first CommonAnnoncePress filtered by the consultation_ref column
 * @method CommonAnnoncePress findOneByOptionEnvoi(int $option_envoi) Return the first CommonAnnoncePress filtered by the option_envoi column
 * @method CommonAnnoncePress findOneByIdDestPress(int $id_Dest_Press) Return the first CommonAnnoncePress filtered by the id_Dest_Press column
 * @method CommonAnnoncePress findOneByIdAdresseFacturation(int $id_adresse_facturation) Return the first CommonAnnoncePress filtered by the id_adresse_facturation column
 *
 * @method array findById(int $id) Return CommonAnnoncePress objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonAnnoncePress objects filtered by the organisme column
 * @method array findByLibelleType(string $libelle_type) Return CommonAnnoncePress objects filtered by the libelle_type column
 * @method array findByDateCreation(string $date_creation) Return CommonAnnoncePress objects filtered by the date_creation column
 * @method array findByObjet(string $objet) Return CommonAnnoncePress objects filtered by the objet column
 * @method array findByTexte(string $texte) Return CommonAnnoncePress objects filtered by the texte column
 * @method array findByConsultationRef(int $consultation_ref) Return CommonAnnoncePress objects filtered by the consultation_ref column
 * @method array findByOptionEnvoi(int $option_envoi) Return CommonAnnoncePress objects filtered by the option_envoi column
 * @method array findByIdDestPress(int $id_Dest_Press) Return CommonAnnoncePress objects filtered by the id_Dest_Press column
 * @method array findByIdAdresseFacturation(int $id_adresse_facturation) Return CommonAnnoncePress objects filtered by the id_adresse_facturation column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonAnnoncePressQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonAnnoncePressQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonAnnoncePress', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonAnnoncePressQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonAnnoncePressQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonAnnoncePressQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonAnnoncePressQuery) {
            return $criteria;
        }
        $query = new CommonAnnoncePressQuery();
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
     * @return   CommonAnnoncePress|CommonAnnoncePress[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonAnnoncePressPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonAnnoncePressPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonAnnoncePress A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `libelle_type`, `date_creation`, `objet`, `texte`, `consultation_ref`, `option_envoi`, `id_Dest_Press`, `id_adresse_facturation` FROM `Annonce_Press` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonAnnoncePress();
            $obj->hydrate($row);
            CommonAnnoncePressPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonAnnoncePress|CommonAnnoncePress[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonAnnoncePress[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonAnnoncePressQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonAnnoncePressPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonAnnoncePressPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonAnnoncePressQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonAnnoncePressPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonAnnoncePressPeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonAnnoncePressQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonAnnoncePressPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonAnnoncePressPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAnnoncePressPeer::ID, $id, $comparison);
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
     * @return CommonAnnoncePressQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAnnoncePressPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the libelle_type column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleType('fooValue');   // WHERE libelle_type = 'fooValue'
     * $query->filterByLibelleType('%fooValue%'); // WHERE libelle_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnoncePressQuery The current query, for fluid interface
     */
    public function filterByLibelleType($libelleType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleType)) {
                $libelleType = str_replace('*', '%', $libelleType);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAnnoncePressPeer::LIBELLE_TYPE, $libelleType, $comparison);
    }

    /**
     * Filter the query on the date_creation column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCreation('fooValue');   // WHERE date_creation = 'fooValue'
     * $query->filterByDateCreation('%fooValue%'); // WHERE date_creation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateCreation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnoncePressQuery The current query, for fluid interface
     */
    public function filterByDateCreation($dateCreation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateCreation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateCreation)) {
                $dateCreation = str_replace('*', '%', $dateCreation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAnnoncePressPeer::DATE_CREATION, $dateCreation, $comparison);
    }

    /**
     * Filter the query on the objet column
     *
     * Example usage:
     * <code>
     * $query->filterByObjet('fooValue');   // WHERE objet = 'fooValue'
     * $query->filterByObjet('%fooValue%'); // WHERE objet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $objet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnoncePressQuery The current query, for fluid interface
     */
    public function filterByObjet($objet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($objet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $objet)) {
                $objet = str_replace('*', '%', $objet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAnnoncePressPeer::OBJET, $objet, $comparison);
    }

    /**
     * Filter the query on the texte column
     *
     * Example usage:
     * <code>
     * $query->filterByTexte('fooValue');   // WHERE texte = 'fooValue'
     * $query->filterByTexte('%fooValue%'); // WHERE texte LIKE '%fooValue%'
     * </code>
     *
     * @param     string $texte The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnoncePressQuery The current query, for fluid interface
     */
    public function filterByTexte($texte = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($texte)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $texte)) {
                $texte = str_replace('*', '%', $texte);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAnnoncePressPeer::TEXTE, $texte, $comparison);
    }

    /**
     * Filter the query on the consultation_ref column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationRef(1234); // WHERE consultation_ref = 1234
     * $query->filterByConsultationRef(array(12, 34)); // WHERE consultation_ref IN (12, 34)
     * $query->filterByConsultationRef(array('min' => 12)); // WHERE consultation_ref >= 12
     * $query->filterByConsultationRef(array('max' => 12)); // WHERE consultation_ref <= 12
     * </code>
     *
     * @param     mixed $consultationRef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnoncePressQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(CommonAnnoncePressPeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(CommonAnnoncePressPeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAnnoncePressPeer::CONSULTATION_REF, $consultationRef, $comparison);
    }

    /**
     * Filter the query on the option_envoi column
     *
     * Example usage:
     * <code>
     * $query->filterByOptionEnvoi(1234); // WHERE option_envoi = 1234
     * $query->filterByOptionEnvoi(array(12, 34)); // WHERE option_envoi IN (12, 34)
     * $query->filterByOptionEnvoi(array('min' => 12)); // WHERE option_envoi >= 12
     * $query->filterByOptionEnvoi(array('max' => 12)); // WHERE option_envoi <= 12
     * </code>
     *
     * @param     mixed $optionEnvoi The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnoncePressQuery The current query, for fluid interface
     */
    public function filterByOptionEnvoi($optionEnvoi = null, $comparison = null)
    {
        if (is_array($optionEnvoi)) {
            $useMinMax = false;
            if (isset($optionEnvoi['min'])) {
                $this->addUsingAlias(CommonAnnoncePressPeer::OPTION_ENVOI, $optionEnvoi['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($optionEnvoi['max'])) {
                $this->addUsingAlias(CommonAnnoncePressPeer::OPTION_ENVOI, $optionEnvoi['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAnnoncePressPeer::OPTION_ENVOI, $optionEnvoi, $comparison);
    }

    /**
     * Filter the query on the id_Dest_Press column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDestPress(1234); // WHERE id_Dest_Press = 1234
     * $query->filterByIdDestPress(array(12, 34)); // WHERE id_Dest_Press IN (12, 34)
     * $query->filterByIdDestPress(array('min' => 12)); // WHERE id_Dest_Press >= 12
     * $query->filterByIdDestPress(array('max' => 12)); // WHERE id_Dest_Press <= 12
     * </code>
     *
     * @param     mixed $idDestPress The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnoncePressQuery The current query, for fluid interface
     */
    public function filterByIdDestPress($idDestPress = null, $comparison = null)
    {
        if (is_array($idDestPress)) {
            $useMinMax = false;
            if (isset($idDestPress['min'])) {
                $this->addUsingAlias(CommonAnnoncePressPeer::ID_DEST_PRESS, $idDestPress['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDestPress['max'])) {
                $this->addUsingAlias(CommonAnnoncePressPeer::ID_DEST_PRESS, $idDestPress['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAnnoncePressPeer::ID_DEST_PRESS, $idDestPress, $comparison);
    }

    /**
     * Filter the query on the id_adresse_facturation column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAdresseFacturation(1234); // WHERE id_adresse_facturation = 1234
     * $query->filterByIdAdresseFacturation(array(12, 34)); // WHERE id_adresse_facturation IN (12, 34)
     * $query->filterByIdAdresseFacturation(array('min' => 12)); // WHERE id_adresse_facturation >= 12
     * $query->filterByIdAdresseFacturation(array('max' => 12)); // WHERE id_adresse_facturation <= 12
     * </code>
     *
     * @param     mixed $idAdresseFacturation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAnnoncePressQuery The current query, for fluid interface
     */
    public function filterByIdAdresseFacturation($idAdresseFacturation = null, $comparison = null)
    {
        if (is_array($idAdresseFacturation)) {
            $useMinMax = false;
            if (isset($idAdresseFacturation['min'])) {
                $this->addUsingAlias(CommonAnnoncePressPeer::ID_ADRESSE_FACTURATION, $idAdresseFacturation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAdresseFacturation['max'])) {
                $this->addUsingAlias(CommonAnnoncePressPeer::ID_ADRESSE_FACTURATION, $idAdresseFacturation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAnnoncePressPeer::ID_ADRESSE_FACTURATION, $idAdresseFacturation, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonAnnoncePress $commonAnnoncePress Object to remove from the list of results
     *
     * @return CommonAnnoncePressQuery The current query, for fluid interface
     */
    public function prune($commonAnnoncePress = null)
    {
        if ($commonAnnoncePress) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonAnnoncePressPeer::ID), $commonAnnoncePress->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonAnnoncePressPeer::ORGANISME), $commonAnnoncePress->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
