<?php


/**
 * Base class that represents a query for the 'Telechargement' table.
 *
 * 
 *
 * @method CommonTelechargementQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonTelechargementQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonTelechargementQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 * @method CommonTelechargementQuery orderByDatetelechargement($order = Criteria::ASC) Order by the datetelechargement column
 * @method CommonTelechargementQuery orderByTiragePlan($order = Criteria::ASC) Order by the tirage_plan column
 * @method CommonTelechargementQuery orderByIdInscrit($order = Criteria::ASC) Order by the id_inscrit column
 * @method CommonTelechargementQuery orderByIdEntreprise($order = Criteria::ASC) Order by the id_entreprise column
 * @method CommonTelechargementQuery orderBySupport($order = Criteria::ASC) Order by the support column
 * @method CommonTelechargementQuery orderByNom($order = Criteria::ASC) Order by the nom column
 * @method CommonTelechargementQuery orderByAdresse($order = Criteria::ASC) Order by the adresse column
 * @method CommonTelechargementQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method CommonTelechargementQuery orderByEntreprise($order = Criteria::ASC) Order by the entreprise column
 * @method CommonTelechargementQuery orderByCodepostal($order = Criteria::ASC) Order by the codepostal column
 * @method CommonTelechargementQuery orderByVille($order = Criteria::ASC) Order by the ville column
 * @method CommonTelechargementQuery orderByPays($order = Criteria::ASC) Order by the pays column
 * @method CommonTelechargementQuery orderByTelephone($order = Criteria::ASC) Order by the telephone column
 * @method CommonTelechargementQuery orderBySiret($order = Criteria::ASC) Order by the siret column
 * @method CommonTelechargementQuery orderByFax($order = Criteria::ASC) Order by the fax column
 * @method CommonTelechargementQuery orderByLots($order = Criteria::ASC) Order by the lots column
 * @method CommonTelechargementQuery orderBySirenetranger($order = Criteria::ASC) Order by the sirenEtranger column
 * @method CommonTelechargementQuery orderByAdresse2($order = Criteria::ASC) Order by the adresse2 column
 * @method CommonTelechargementQuery orderByPrenom($order = Criteria::ASC) Order by the prenom column
 * @method CommonTelechargementQuery orderByNomsFichiersDce($order = Criteria::ASC) Order by the noms_fichiers_dce column
 * @method CommonTelechargementQuery orderByObservation($order = Criteria::ASC) Order by the Observation column
 * @method CommonTelechargementQuery orderByAcronymePays($order = Criteria::ASC) Order by the acronyme_pays column
 * @method CommonTelechargementQuery orderByIfu($order = Criteria::ASC) Order by the ifu column
 *
 * @method CommonTelechargementQuery groupById() Group by the id column
 * @method CommonTelechargementQuery groupByOrganisme() Group by the organisme column
 * @method CommonTelechargementQuery groupByConsultationRef() Group by the consultation_ref column
 * @method CommonTelechargementQuery groupByDatetelechargement() Group by the datetelechargement column
 * @method CommonTelechargementQuery groupByTiragePlan() Group by the tirage_plan column
 * @method CommonTelechargementQuery groupByIdInscrit() Group by the id_inscrit column
 * @method CommonTelechargementQuery groupByIdEntreprise() Group by the id_entreprise column
 * @method CommonTelechargementQuery groupBySupport() Group by the support column
 * @method CommonTelechargementQuery groupByNom() Group by the nom column
 * @method CommonTelechargementQuery groupByAdresse() Group by the adresse column
 * @method CommonTelechargementQuery groupByEmail() Group by the email column
 * @method CommonTelechargementQuery groupByEntreprise() Group by the entreprise column
 * @method CommonTelechargementQuery groupByCodepostal() Group by the codepostal column
 * @method CommonTelechargementQuery groupByVille() Group by the ville column
 * @method CommonTelechargementQuery groupByPays() Group by the pays column
 * @method CommonTelechargementQuery groupByTelephone() Group by the telephone column
 * @method CommonTelechargementQuery groupBySiret() Group by the siret column
 * @method CommonTelechargementQuery groupByFax() Group by the fax column
 * @method CommonTelechargementQuery groupByLots() Group by the lots column
 * @method CommonTelechargementQuery groupBySirenetranger() Group by the sirenEtranger column
 * @method CommonTelechargementQuery groupByAdresse2() Group by the adresse2 column
 * @method CommonTelechargementQuery groupByPrenom() Group by the prenom column
 * @method CommonTelechargementQuery groupByNomsFichiersDce() Group by the noms_fichiers_dce column
 * @method CommonTelechargementQuery groupByObservation() Group by the Observation column
 * @method CommonTelechargementQuery groupByAcronymePays() Group by the acronyme_pays column
 * @method CommonTelechargementQuery groupByIfu() Group by the ifu column
 *
 * @method CommonTelechargementQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTelechargementQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTelechargementQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTelechargementQuery leftJoinCommonConsultation($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonConsultation relation
 * @method CommonTelechargementQuery rightJoinCommonConsultation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonConsultation relation
 * @method CommonTelechargementQuery innerJoinCommonConsultation($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonConsultation relation
 *
 * @method CommonTelechargement findOne(PropelPDO $con = null) Return the first CommonTelechargement matching the query
 * @method CommonTelechargement findOneOrCreate(PropelPDO $con = null) Return the first CommonTelechargement matching the query, or a new CommonTelechargement object populated from the query conditions when no match is found
 *
 * @method CommonTelechargement findOneById(int $id) Return the first CommonTelechargement filtered by the id column
 * @method CommonTelechargement findOneByOrganisme(string $organisme) Return the first CommonTelechargement filtered by the organisme column
 * @method CommonTelechargement findOneByConsultationRef(int $consultation_ref) Return the first CommonTelechargement filtered by the consultation_ref column
 * @method CommonTelechargement findOneByDatetelechargement(string $datetelechargement) Return the first CommonTelechargement filtered by the datetelechargement column
 * @method CommonTelechargement findOneByTiragePlan(int $tirage_plan) Return the first CommonTelechargement filtered by the tirage_plan column
 * @method CommonTelechargement findOneByIdInscrit(int $id_inscrit) Return the first CommonTelechargement filtered by the id_inscrit column
 * @method CommonTelechargement findOneByIdEntreprise(int $id_entreprise) Return the first CommonTelechargement filtered by the id_entreprise column
 * @method CommonTelechargement findOneBySupport(string $support) Return the first CommonTelechargement filtered by the support column
 * @method CommonTelechargement findOneByNom(string $nom) Return the first CommonTelechargement filtered by the nom column
 * @method CommonTelechargement findOneByAdresse(string $adresse) Return the first CommonTelechargement filtered by the adresse column
 * @method CommonTelechargement findOneByEmail(string $email) Return the first CommonTelechargement filtered by the email column
 * @method CommonTelechargement findOneByEntreprise(string $entreprise) Return the first CommonTelechargement filtered by the entreprise column
 * @method CommonTelechargement findOneByCodepostal(string $codepostal) Return the first CommonTelechargement filtered by the codepostal column
 * @method CommonTelechargement findOneByVille(string $ville) Return the first CommonTelechargement filtered by the ville column
 * @method CommonTelechargement findOneByPays(string $pays) Return the first CommonTelechargement filtered by the pays column
 * @method CommonTelechargement findOneByTelephone(string $telephone) Return the first CommonTelechargement filtered by the telephone column
 * @method CommonTelechargement findOneBySiret(string $siret) Return the first CommonTelechargement filtered by the siret column
 * @method CommonTelechargement findOneByFax(string $fax) Return the first CommonTelechargement filtered by the fax column
 * @method CommonTelechargement findOneByLots(string $lots) Return the first CommonTelechargement filtered by the lots column
 * @method CommonTelechargement findOneBySirenetranger(string $sirenEtranger) Return the first CommonTelechargement filtered by the sirenEtranger column
 * @method CommonTelechargement findOneByAdresse2(string $adresse2) Return the first CommonTelechargement filtered by the adresse2 column
 * @method CommonTelechargement findOneByPrenom(string $prenom) Return the first CommonTelechargement filtered by the prenom column
 * @method CommonTelechargement findOneByNomsFichiersDce(string $noms_fichiers_dce) Return the first CommonTelechargement filtered by the noms_fichiers_dce column
 * @method CommonTelechargement findOneByObservation(string $Observation) Return the first CommonTelechargement filtered by the Observation column
 * @method CommonTelechargement findOneByAcronymePays(string $acronyme_pays) Return the first CommonTelechargement filtered by the acronyme_pays column
 * @method CommonTelechargement findOneByIfu(string $ifu) Return the first CommonTelechargement filtered by the ifu column
 *
 * @method array findById(int $id) Return CommonTelechargement objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonTelechargement objects filtered by the organisme column
 * @method array findByConsultationRef(int $consultation_ref) Return CommonTelechargement objects filtered by the consultation_ref column
 * @method array findByDatetelechargement(string $datetelechargement) Return CommonTelechargement objects filtered by the datetelechargement column
 * @method array findByTiragePlan(int $tirage_plan) Return CommonTelechargement objects filtered by the tirage_plan column
 * @method array findByIdInscrit(int $id_inscrit) Return CommonTelechargement objects filtered by the id_inscrit column
 * @method array findByIdEntreprise(int $id_entreprise) Return CommonTelechargement objects filtered by the id_entreprise column
 * @method array findBySupport(string $support) Return CommonTelechargement objects filtered by the support column
 * @method array findByNom(string $nom) Return CommonTelechargement objects filtered by the nom column
 * @method array findByAdresse(string $adresse) Return CommonTelechargement objects filtered by the adresse column
 * @method array findByEmail(string $email) Return CommonTelechargement objects filtered by the email column
 * @method array findByEntreprise(string $entreprise) Return CommonTelechargement objects filtered by the entreprise column
 * @method array findByCodepostal(string $codepostal) Return CommonTelechargement objects filtered by the codepostal column
 * @method array findByVille(string $ville) Return CommonTelechargement objects filtered by the ville column
 * @method array findByPays(string $pays) Return CommonTelechargement objects filtered by the pays column
 * @method array findByTelephone(string $telephone) Return CommonTelechargement objects filtered by the telephone column
 * @method array findBySiret(string $siret) Return CommonTelechargement objects filtered by the siret column
 * @method array findByFax(string $fax) Return CommonTelechargement objects filtered by the fax column
 * @method array findByLots(string $lots) Return CommonTelechargement objects filtered by the lots column
 * @method array findBySirenetranger(string $sirenEtranger) Return CommonTelechargement objects filtered by the sirenEtranger column
 * @method array findByAdresse2(string $adresse2) Return CommonTelechargement objects filtered by the adresse2 column
 * @method array findByPrenom(string $prenom) Return CommonTelechargement objects filtered by the prenom column
 * @method array findByNomsFichiersDce(string $noms_fichiers_dce) Return CommonTelechargement objects filtered by the noms_fichiers_dce column
 * @method array findByObservation(string $Observation) Return CommonTelechargement objects filtered by the Observation column
 * @method array findByAcronymePays(string $acronyme_pays) Return CommonTelechargement objects filtered by the acronyme_pays column
 * @method array findByIfu(string $ifu) Return CommonTelechargement objects filtered by the ifu column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTelechargementQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTelechargementQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTelechargement', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTelechargementQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTelechargementQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTelechargementQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTelechargementQuery) {
            return $criteria;
        }
        $query = new CommonTelechargementQuery();
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
     * @return   CommonTelechargement|CommonTelechargement[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTelechargementPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTelechargementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTelechargement A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `consultation_ref`, `datetelechargement`, `tirage_plan`, `id_inscrit`, `id_entreprise`, `support`, `nom`, `adresse`, `email`, `entreprise`, `codepostal`, `ville`, `pays`, `telephone`, `siret`, `fax`, `lots`, `sirenEtranger`, `adresse2`, `prenom`, `noms_fichiers_dce`, `Observation`, `acronyme_pays`, `ifu` FROM `Telechargement` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonTelechargement();
            $obj->hydrate($row);
            CommonTelechargementPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonTelechargement|CommonTelechargement[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTelechargement[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTelechargementQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonTelechargementPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonTelechargementPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTelechargementQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonTelechargementPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonTelechargementPeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonTelechargementQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonTelechargementPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonTelechargementPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTelechargementPeer::ID, $id, $comparison);
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
     * @return CommonTelechargementQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTelechargementPeer::ORGANISME, $organisme, $comparison);
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
     * @see       filterByCommonConsultation()
     *
     * @param     mixed $consultationRef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTelechargementQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(CommonTelechargementPeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(CommonTelechargementPeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTelechargementPeer::CONSULTATION_REF, $consultationRef, $comparison);
    }

    /**
     * Filter the query on the datetelechargement column
     *
     * Example usage:
     * <code>
     * $query->filterByDatetelechargement('2011-03-14'); // WHERE datetelechargement = '2011-03-14'
     * $query->filterByDatetelechargement('now'); // WHERE datetelechargement = '2011-03-14'
     * $query->filterByDatetelechargement(array('max' => 'yesterday')); // WHERE datetelechargement > '2011-03-13'
     * </code>
     *
     * @param     mixed $datetelechargement The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTelechargementQuery The current query, for fluid interface
     */
    public function filterByDatetelechargement($datetelechargement = null, $comparison = null)
    {
        if (is_array($datetelechargement)) {
            $useMinMax = false;
            if (isset($datetelechargement['min'])) {
                $this->addUsingAlias(CommonTelechargementPeer::DATETELECHARGEMENT, $datetelechargement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datetelechargement['max'])) {
                $this->addUsingAlias(CommonTelechargementPeer::DATETELECHARGEMENT, $datetelechargement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTelechargementPeer::DATETELECHARGEMENT, $datetelechargement, $comparison);
    }

    /**
     * Filter the query on the tirage_plan column
     *
     * Example usage:
     * <code>
     * $query->filterByTiragePlan(1234); // WHERE tirage_plan = 1234
     * $query->filterByTiragePlan(array(12, 34)); // WHERE tirage_plan IN (12, 34)
     * $query->filterByTiragePlan(array('min' => 12)); // WHERE tirage_plan >= 12
     * $query->filterByTiragePlan(array('max' => 12)); // WHERE tirage_plan <= 12
     * </code>
     *
     * @param     mixed $tiragePlan The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTelechargementQuery The current query, for fluid interface
     */
    public function filterByTiragePlan($tiragePlan = null, $comparison = null)
    {
        if (is_array($tiragePlan)) {
            $useMinMax = false;
            if (isset($tiragePlan['min'])) {
                $this->addUsingAlias(CommonTelechargementPeer::TIRAGE_PLAN, $tiragePlan['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tiragePlan['max'])) {
                $this->addUsingAlias(CommonTelechargementPeer::TIRAGE_PLAN, $tiragePlan['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTelechargementPeer::TIRAGE_PLAN, $tiragePlan, $comparison);
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
     * @return CommonTelechargementQuery The current query, for fluid interface
     */
    public function filterByIdInscrit($idInscrit = null, $comparison = null)
    {
        if (is_array($idInscrit)) {
            $useMinMax = false;
            if (isset($idInscrit['min'])) {
                $this->addUsingAlias(CommonTelechargementPeer::ID_INSCRIT, $idInscrit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idInscrit['max'])) {
                $this->addUsingAlias(CommonTelechargementPeer::ID_INSCRIT, $idInscrit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTelechargementPeer::ID_INSCRIT, $idInscrit, $comparison);
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
     * @return CommonTelechargementQuery The current query, for fluid interface
     */
    public function filterByIdEntreprise($idEntreprise = null, $comparison = null)
    {
        if (is_array($idEntreprise)) {
            $useMinMax = false;
            if (isset($idEntreprise['min'])) {
                $this->addUsingAlias(CommonTelechargementPeer::ID_ENTREPRISE, $idEntreprise['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntreprise['max'])) {
                $this->addUsingAlias(CommonTelechargementPeer::ID_ENTREPRISE, $idEntreprise['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTelechargementPeer::ID_ENTREPRISE, $idEntreprise, $comparison);
    }

    /**
     * Filter the query on the support column
     *
     * Example usage:
     * <code>
     * $query->filterBySupport('fooValue');   // WHERE support = 'fooValue'
     * $query->filterBySupport('%fooValue%'); // WHERE support LIKE '%fooValue%'
     * </code>
     *
     * @param     string $support The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTelechargementQuery The current query, for fluid interface
     */
    public function filterBySupport($support = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($support)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $support)) {
                $support = str_replace('*', '%', $support);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTelechargementPeer::SUPPORT, $support, $comparison);
    }

    /**
     * Filter the query on the nom column
     *
     * Example usage:
     * <code>
     * $query->filterByNom('fooValue');   // WHERE nom = 'fooValue'
     * $query->filterByNom('%fooValue%'); // WHERE nom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTelechargementQuery The current query, for fluid interface
     */
    public function filterByNom($nom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nom)) {
                $nom = str_replace('*', '%', $nom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTelechargementPeer::NOM, $nom, $comparison);
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
     * @return CommonTelechargementQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTelechargementPeer::ADRESSE, $adresse, $comparison);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTelechargementQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $email)) {
                $email = str_replace('*', '%', $email);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTelechargementPeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByEntreprise('fooValue');   // WHERE entreprise = 'fooValue'
     * $query->filterByEntreprise('%fooValue%'); // WHERE entreprise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $entreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTelechargementQuery The current query, for fluid interface
     */
    public function filterByEntreprise($entreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($entreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $entreprise)) {
                $entreprise = str_replace('*', '%', $entreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTelechargementPeer::ENTREPRISE, $entreprise, $comparison);
    }

    /**
     * Filter the query on the codepostal column
     *
     * Example usage:
     * <code>
     * $query->filterByCodepostal('fooValue');   // WHERE codepostal = 'fooValue'
     * $query->filterByCodepostal('%fooValue%'); // WHERE codepostal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codepostal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTelechargementQuery The current query, for fluid interface
     */
    public function filterByCodepostal($codepostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codepostal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codepostal)) {
                $codepostal = str_replace('*', '%', $codepostal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTelechargementPeer::CODEPOSTAL, $codepostal, $comparison);
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
     * @return CommonTelechargementQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTelechargementPeer::VILLE, $ville, $comparison);
    }

    /**
     * Filter the query on the pays column
     *
     * Example usage:
     * <code>
     * $query->filterByPays('fooValue');   // WHERE pays = 'fooValue'
     * $query->filterByPays('%fooValue%'); // WHERE pays LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pays The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTelechargementQuery The current query, for fluid interface
     */
    public function filterByPays($pays = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pays)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pays)) {
                $pays = str_replace('*', '%', $pays);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTelechargementPeer::PAYS, $pays, $comparison);
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
     * @return CommonTelechargementQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTelechargementPeer::TELEPHONE, $telephone, $comparison);
    }

    /**
     * Filter the query on the siret column
     *
     * Example usage:
     * <code>
     * $query->filterBySiret('fooValue');   // WHERE siret = 'fooValue'
     * $query->filterBySiret('%fooValue%'); // WHERE siret LIKE '%fooValue%'
     * </code>
     *
     * @param     string $siret The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTelechargementQuery The current query, for fluid interface
     */
    public function filterBySiret($siret = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($siret)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $siret)) {
                $siret = str_replace('*', '%', $siret);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTelechargementPeer::SIRET, $siret, $comparison);
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
     * @return CommonTelechargementQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTelechargementPeer::FAX, $fax, $comparison);
    }

    /**
     * Filter the query on the lots column
     *
     * Example usage:
     * <code>
     * $query->filterByLots('fooValue');   // WHERE lots = 'fooValue'
     * $query->filterByLots('%fooValue%'); // WHERE lots LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lots The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTelechargementQuery The current query, for fluid interface
     */
    public function filterByLots($lots = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lots)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lots)) {
                $lots = str_replace('*', '%', $lots);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTelechargementPeer::LOTS, $lots, $comparison);
    }

    /**
     * Filter the query on the sirenEtranger column
     *
     * Example usage:
     * <code>
     * $query->filterBySirenetranger('fooValue');   // WHERE sirenEtranger = 'fooValue'
     * $query->filterBySirenetranger('%fooValue%'); // WHERE sirenEtranger LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sirenetranger The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTelechargementQuery The current query, for fluid interface
     */
    public function filterBySirenetranger($sirenetranger = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sirenetranger)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sirenetranger)) {
                $sirenetranger = str_replace('*', '%', $sirenetranger);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTelechargementPeer::SIRENETRANGER, $sirenetranger, $comparison);
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
     * @return CommonTelechargementQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTelechargementPeer::ADRESSE2, $adresse2, $comparison);
    }

    /**
     * Filter the query on the prenom column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenom('fooValue');   // WHERE prenom = 'fooValue'
     * $query->filterByPrenom('%fooValue%'); // WHERE prenom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTelechargementQuery The current query, for fluid interface
     */
    public function filterByPrenom($prenom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenom)) {
                $prenom = str_replace('*', '%', $prenom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTelechargementPeer::PRENOM, $prenom, $comparison);
    }

    /**
     * Filter the query on the noms_fichiers_dce column
     *
     * Example usage:
     * <code>
     * $query->filterByNomsFichiersDce('fooValue');   // WHERE noms_fichiers_dce = 'fooValue'
     * $query->filterByNomsFichiersDce('%fooValue%'); // WHERE noms_fichiers_dce LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomsFichiersDce The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTelechargementQuery The current query, for fluid interface
     */
    public function filterByNomsFichiersDce($nomsFichiersDce = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomsFichiersDce)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomsFichiersDce)) {
                $nomsFichiersDce = str_replace('*', '%', $nomsFichiersDce);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTelechargementPeer::NOMS_FICHIERS_DCE, $nomsFichiersDce, $comparison);
    }

    /**
     * Filter the query on the Observation column
     *
     * Example usage:
     * <code>
     * $query->filterByObservation('fooValue');   // WHERE Observation = 'fooValue'
     * $query->filterByObservation('%fooValue%'); // WHERE Observation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $observation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTelechargementQuery The current query, for fluid interface
     */
    public function filterByObservation($observation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($observation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $observation)) {
                $observation = str_replace('*', '%', $observation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTelechargementPeer::OBSERVATION, $observation, $comparison);
    }

    /**
     * Filter the query on the acronyme_pays column
     *
     * Example usage:
     * <code>
     * $query->filterByAcronymePays('fooValue');   // WHERE acronyme_pays = 'fooValue'
     * $query->filterByAcronymePays('%fooValue%'); // WHERE acronyme_pays LIKE '%fooValue%'
     * </code>
     *
     * @param     string $acronymePays The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTelechargementQuery The current query, for fluid interface
     */
    public function filterByAcronymePays($acronymePays = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($acronymePays)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $acronymePays)) {
                $acronymePays = str_replace('*', '%', $acronymePays);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTelechargementPeer::ACRONYME_PAYS, $acronymePays, $comparison);
    }

    /**
     * Filter the query on the ifu column
     *
     * Example usage:
     * <code>
     * $query->filterByIfu('fooValue');   // WHERE ifu = 'fooValue'
     * $query->filterByIfu('%fooValue%'); // WHERE ifu LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ifu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTelechargementQuery The current query, for fluid interface
     */
    public function filterByIfu($ifu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ifu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ifu)) {
                $ifu = str_replace('*', '%', $ifu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTelechargementPeer::IFU, $ifu, $comparison);
    }

    /**
     * Filter the query by a related CommonConsultation object
     *
     * @param   CommonConsultation $commonConsultation The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTelechargementQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonConsultation($commonConsultation, $comparison = null)
    {
        if ($commonConsultation instanceof CommonConsultation) {
            return $this
                ->addUsingAlias(CommonTelechargementPeer::ORGANISME, $commonConsultation->getOrganisme(), $comparison)
                ->addUsingAlias(CommonTelechargementPeer::CONSULTATION_REF, $commonConsultation->getReference(), $comparison);
        } else {
            throw new PropelException('filterByCommonConsultation() only accepts arguments of type CommonConsultation');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonConsultation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTelechargementQuery The current query, for fluid interface
     */
    public function joinCommonConsultation($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonConsultation');

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
            $this->addJoinObject($join, 'CommonConsultation');
        }

        return $this;
    }

    /**
     * Use the CommonConsultation relation CommonConsultation object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonConsultationQuery A secondary query class using the current class as primary query
     */
    public function useCommonConsultationQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonConsultation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonConsultation', 'CommonConsultationQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTelechargement $commonTelechargement Object to remove from the list of results
     *
     * @return CommonTelechargementQuery The current query, for fluid interface
     */
    public function prune($commonTelechargement = null)
    {
        if ($commonTelechargement) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonTelechargementPeer::ID), $commonTelechargement->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonTelechargementPeer::ORGANISME), $commonTelechargement->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
