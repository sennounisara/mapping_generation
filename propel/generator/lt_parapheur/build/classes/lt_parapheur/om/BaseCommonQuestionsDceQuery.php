<?php


/**
 * Base class that represents a query for the 'questions_dce' table.
 *
 * 
 *
 * @method CommonQuestionsDceQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonQuestionsDceQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonQuestionsDceQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 * @method CommonQuestionsDceQuery orderByDateDepot($order = Criteria::ASC) Order by the date_depot column
 * @method CommonQuestionsDceQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method CommonQuestionsDceQuery orderByNom($order = Criteria::ASC) Order by the nom column
 * @method CommonQuestionsDceQuery orderByEntreprise($order = Criteria::ASC) Order by the entreprise column
 * @method CommonQuestionsDceQuery orderByAdresse($order = Criteria::ASC) Order by the adresse column
 * @method CommonQuestionsDceQuery orderByCp($order = Criteria::ASC) Order by the cp column
 * @method CommonQuestionsDceQuery orderByVille($order = Criteria::ASC) Order by the ville column
 * @method CommonQuestionsDceQuery orderByTel($order = Criteria::ASC) Order by the tel column
 * @method CommonQuestionsDceQuery orderByFax($order = Criteria::ASC) Order by the fax column
 * @method CommonQuestionsDceQuery orderByQuestion($order = Criteria::ASC) Order by the question column
 * @method CommonQuestionsDceQuery orderByStatut($order = Criteria::ASC) Order by the statut column
 * @method CommonQuestionsDceQuery orderByDateReponse($order = Criteria::ASC) Order by the date_reponse column
 * @method CommonQuestionsDceQuery orderByPersonneRepondu($order = Criteria::ASC) Order by the personne_repondu column
 * @method CommonQuestionsDceQuery orderByTypeDepot($order = Criteria::ASC) Order by the type_depot column
 * @method CommonQuestionsDceQuery orderByPays($order = Criteria::ASC) Order by the pays column
 * @method CommonQuestionsDceQuery orderByObservation($order = Criteria::ASC) Order by the Observation column
 * @method CommonQuestionsDceQuery orderBySiret($order = Criteria::ASC) Order by the siret column
 * @method CommonQuestionsDceQuery orderByIdentifiantNational($order = Criteria::ASC) Order by the identifiant_national column
 * @method CommonQuestionsDceQuery orderByAcronymePays($order = Criteria::ASC) Order by the acronyme_pays column
 * @method CommonQuestionsDceQuery orderByAdresse2($order = Criteria::ASC) Order by the adresse2 column
 * @method CommonQuestionsDceQuery orderByIdFichier($order = Criteria::ASC) Order by the id_fichier column
 * @method CommonQuestionsDceQuery orderByNomFichier($order = Criteria::ASC) Order by the nom_fichier column
 * @method CommonQuestionsDceQuery orderByPrenom($order = Criteria::ASC) Order by the prenom column
 * @method CommonQuestionsDceQuery orderBySiretEtranger($order = Criteria::ASC) Order by the siret_etranger column
 * @method CommonQuestionsDceQuery orderByIdInscrit($order = Criteria::ASC) Order by the id_inscrit column
 * @method CommonQuestionsDceQuery orderByIdEntreprise($order = Criteria::ASC) Order by the id_entreprise column
 * @method CommonQuestionsDceQuery orderByIfu($order = Criteria::ASC) Order by the ifu column
 *
 * @method CommonQuestionsDceQuery groupById() Group by the id column
 * @method CommonQuestionsDceQuery groupByOrganisme() Group by the organisme column
 * @method CommonQuestionsDceQuery groupByConsultationRef() Group by the consultation_ref column
 * @method CommonQuestionsDceQuery groupByDateDepot() Group by the date_depot column
 * @method CommonQuestionsDceQuery groupByEmail() Group by the email column
 * @method CommonQuestionsDceQuery groupByNom() Group by the nom column
 * @method CommonQuestionsDceQuery groupByEntreprise() Group by the entreprise column
 * @method CommonQuestionsDceQuery groupByAdresse() Group by the adresse column
 * @method CommonQuestionsDceQuery groupByCp() Group by the cp column
 * @method CommonQuestionsDceQuery groupByVille() Group by the ville column
 * @method CommonQuestionsDceQuery groupByTel() Group by the tel column
 * @method CommonQuestionsDceQuery groupByFax() Group by the fax column
 * @method CommonQuestionsDceQuery groupByQuestion() Group by the question column
 * @method CommonQuestionsDceQuery groupByStatut() Group by the statut column
 * @method CommonQuestionsDceQuery groupByDateReponse() Group by the date_reponse column
 * @method CommonQuestionsDceQuery groupByPersonneRepondu() Group by the personne_repondu column
 * @method CommonQuestionsDceQuery groupByTypeDepot() Group by the type_depot column
 * @method CommonQuestionsDceQuery groupByPays() Group by the pays column
 * @method CommonQuestionsDceQuery groupByObservation() Group by the Observation column
 * @method CommonQuestionsDceQuery groupBySiret() Group by the siret column
 * @method CommonQuestionsDceQuery groupByIdentifiantNational() Group by the identifiant_national column
 * @method CommonQuestionsDceQuery groupByAcronymePays() Group by the acronyme_pays column
 * @method CommonQuestionsDceQuery groupByAdresse2() Group by the adresse2 column
 * @method CommonQuestionsDceQuery groupByIdFichier() Group by the id_fichier column
 * @method CommonQuestionsDceQuery groupByNomFichier() Group by the nom_fichier column
 * @method CommonQuestionsDceQuery groupByPrenom() Group by the prenom column
 * @method CommonQuestionsDceQuery groupBySiretEtranger() Group by the siret_etranger column
 * @method CommonQuestionsDceQuery groupByIdInscrit() Group by the id_inscrit column
 * @method CommonQuestionsDceQuery groupByIdEntreprise() Group by the id_entreprise column
 * @method CommonQuestionsDceQuery groupByIfu() Group by the ifu column
 *
 * @method CommonQuestionsDceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonQuestionsDceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonQuestionsDceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonQuestionsDce findOne(PropelPDO $con = null) Return the first CommonQuestionsDce matching the query
 * @method CommonQuestionsDce findOneOrCreate(PropelPDO $con = null) Return the first CommonQuestionsDce matching the query, or a new CommonQuestionsDce object populated from the query conditions when no match is found
 *
 * @method CommonQuestionsDce findOneById(int $id) Return the first CommonQuestionsDce filtered by the id column
 * @method CommonQuestionsDce findOneByOrganisme(string $organisme) Return the first CommonQuestionsDce filtered by the organisme column
 * @method CommonQuestionsDce findOneByConsultationRef(int $consultation_ref) Return the first CommonQuestionsDce filtered by the consultation_ref column
 * @method CommonQuestionsDce findOneByDateDepot(string $date_depot) Return the first CommonQuestionsDce filtered by the date_depot column
 * @method CommonQuestionsDce findOneByEmail(string $email) Return the first CommonQuestionsDce filtered by the email column
 * @method CommonQuestionsDce findOneByNom(string $nom) Return the first CommonQuestionsDce filtered by the nom column
 * @method CommonQuestionsDce findOneByEntreprise(string $entreprise) Return the first CommonQuestionsDce filtered by the entreprise column
 * @method CommonQuestionsDce findOneByAdresse(string $adresse) Return the first CommonQuestionsDce filtered by the adresse column
 * @method CommonQuestionsDce findOneByCp(string $cp) Return the first CommonQuestionsDce filtered by the cp column
 * @method CommonQuestionsDce findOneByVille(string $ville) Return the first CommonQuestionsDce filtered by the ville column
 * @method CommonQuestionsDce findOneByTel(string $tel) Return the first CommonQuestionsDce filtered by the tel column
 * @method CommonQuestionsDce findOneByFax(string $fax) Return the first CommonQuestionsDce filtered by the fax column
 * @method CommonQuestionsDce findOneByQuestion(string $question) Return the first CommonQuestionsDce filtered by the question column
 * @method CommonQuestionsDce findOneByStatut(int $statut) Return the first CommonQuestionsDce filtered by the statut column
 * @method CommonQuestionsDce findOneByDateReponse(string $date_reponse) Return the first CommonQuestionsDce filtered by the date_reponse column
 * @method CommonQuestionsDce findOneByPersonneRepondu(string $personne_repondu) Return the first CommonQuestionsDce filtered by the personne_repondu column
 * @method CommonQuestionsDce findOneByTypeDepot(string $type_depot) Return the first CommonQuestionsDce filtered by the type_depot column
 * @method CommonQuestionsDce findOneByPays(string $pays) Return the first CommonQuestionsDce filtered by the pays column
 * @method CommonQuestionsDce findOneByObservation(string $Observation) Return the first CommonQuestionsDce filtered by the Observation column
 * @method CommonQuestionsDce findOneBySiret(string $siret) Return the first CommonQuestionsDce filtered by the siret column
 * @method CommonQuestionsDce findOneByIdentifiantNational(string $identifiant_national) Return the first CommonQuestionsDce filtered by the identifiant_national column
 * @method CommonQuestionsDce findOneByAcronymePays(string $acronyme_pays) Return the first CommonQuestionsDce filtered by the acronyme_pays column
 * @method CommonQuestionsDce findOneByAdresse2(string $adresse2) Return the first CommonQuestionsDce filtered by the adresse2 column
 * @method CommonQuestionsDce findOneByIdFichier(int $id_fichier) Return the first CommonQuestionsDce filtered by the id_fichier column
 * @method CommonQuestionsDce findOneByNomFichier(string $nom_fichier) Return the first CommonQuestionsDce filtered by the nom_fichier column
 * @method CommonQuestionsDce findOneByPrenom(string $prenom) Return the first CommonQuestionsDce filtered by the prenom column
 * @method CommonQuestionsDce findOneBySiretEtranger(string $siret_etranger) Return the first CommonQuestionsDce filtered by the siret_etranger column
 * @method CommonQuestionsDce findOneByIdInscrit(int $id_inscrit) Return the first CommonQuestionsDce filtered by the id_inscrit column
 * @method CommonQuestionsDce findOneByIdEntreprise(int $id_entreprise) Return the first CommonQuestionsDce filtered by the id_entreprise column
 * @method CommonQuestionsDce findOneByIfu(string $ifu) Return the first CommonQuestionsDce filtered by the ifu column
 *
 * @method array findById(int $id) Return CommonQuestionsDce objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonQuestionsDce objects filtered by the organisme column
 * @method array findByConsultationRef(int $consultation_ref) Return CommonQuestionsDce objects filtered by the consultation_ref column
 * @method array findByDateDepot(string $date_depot) Return CommonQuestionsDce objects filtered by the date_depot column
 * @method array findByEmail(string $email) Return CommonQuestionsDce objects filtered by the email column
 * @method array findByNom(string $nom) Return CommonQuestionsDce objects filtered by the nom column
 * @method array findByEntreprise(string $entreprise) Return CommonQuestionsDce objects filtered by the entreprise column
 * @method array findByAdresse(string $adresse) Return CommonQuestionsDce objects filtered by the adresse column
 * @method array findByCp(string $cp) Return CommonQuestionsDce objects filtered by the cp column
 * @method array findByVille(string $ville) Return CommonQuestionsDce objects filtered by the ville column
 * @method array findByTel(string $tel) Return CommonQuestionsDce objects filtered by the tel column
 * @method array findByFax(string $fax) Return CommonQuestionsDce objects filtered by the fax column
 * @method array findByQuestion(string $question) Return CommonQuestionsDce objects filtered by the question column
 * @method array findByStatut(int $statut) Return CommonQuestionsDce objects filtered by the statut column
 * @method array findByDateReponse(string $date_reponse) Return CommonQuestionsDce objects filtered by the date_reponse column
 * @method array findByPersonneRepondu(string $personne_repondu) Return CommonQuestionsDce objects filtered by the personne_repondu column
 * @method array findByTypeDepot(string $type_depot) Return CommonQuestionsDce objects filtered by the type_depot column
 * @method array findByPays(string $pays) Return CommonQuestionsDce objects filtered by the pays column
 * @method array findByObservation(string $Observation) Return CommonQuestionsDce objects filtered by the Observation column
 * @method array findBySiret(string $siret) Return CommonQuestionsDce objects filtered by the siret column
 * @method array findByIdentifiantNational(string $identifiant_national) Return CommonQuestionsDce objects filtered by the identifiant_national column
 * @method array findByAcronymePays(string $acronyme_pays) Return CommonQuestionsDce objects filtered by the acronyme_pays column
 * @method array findByAdresse2(string $adresse2) Return CommonQuestionsDce objects filtered by the adresse2 column
 * @method array findByIdFichier(int $id_fichier) Return CommonQuestionsDce objects filtered by the id_fichier column
 * @method array findByNomFichier(string $nom_fichier) Return CommonQuestionsDce objects filtered by the nom_fichier column
 * @method array findByPrenom(string $prenom) Return CommonQuestionsDce objects filtered by the prenom column
 * @method array findBySiretEtranger(string $siret_etranger) Return CommonQuestionsDce objects filtered by the siret_etranger column
 * @method array findByIdInscrit(int $id_inscrit) Return CommonQuestionsDce objects filtered by the id_inscrit column
 * @method array findByIdEntreprise(int $id_entreprise) Return CommonQuestionsDce objects filtered by the id_entreprise column
 * @method array findByIfu(string $ifu) Return CommonQuestionsDce objects filtered by the ifu column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonQuestionsDceQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonQuestionsDceQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonQuestionsDce', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonQuestionsDceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonQuestionsDceQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonQuestionsDceQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonQuestionsDceQuery) {
            return $criteria;
        }
        $query = new CommonQuestionsDceQuery();
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
     * @return   CommonQuestionsDce|CommonQuestionsDce[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonQuestionsDcePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonQuestionsDcePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonQuestionsDce A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `consultation_ref`, `date_depot`, `email`, `nom`, `entreprise`, `adresse`, `cp`, `ville`, `tel`, `fax`, `question`, `statut`, `date_reponse`, `personne_repondu`, `type_depot`, `pays`, `Observation`, `siret`, `identifiant_national`, `acronyme_pays`, `adresse2`, `id_fichier`, `nom_fichier`, `prenom`, `siret_etranger`, `id_inscrit`, `id_entreprise`, `ifu` FROM `questions_dce` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonQuestionsDce();
            $obj->hydrate($row);
            CommonQuestionsDcePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonQuestionsDce|CommonQuestionsDce[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonQuestionsDce[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonQuestionsDceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonQuestionsDcePeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonQuestionsDcePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonQuestionsDceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonQuestionsDcePeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonQuestionsDcePeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonQuestionsDceQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonQuestionsDcePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonQuestionsDcePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonQuestionsDcePeer::ID, $id, $comparison);
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
     * @return CommonQuestionsDceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonQuestionsDcePeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonQuestionsDceQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(CommonQuestionsDcePeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(CommonQuestionsDcePeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonQuestionsDcePeer::CONSULTATION_REF, $consultationRef, $comparison);
    }

    /**
     * Filter the query on the date_depot column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDepot('2011-03-14'); // WHERE date_depot = '2011-03-14'
     * $query->filterByDateDepot('now'); // WHERE date_depot = '2011-03-14'
     * $query->filterByDateDepot(array('max' => 'yesterday')); // WHERE date_depot > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateDepot The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonQuestionsDceQuery The current query, for fluid interface
     */
    public function filterByDateDepot($dateDepot = null, $comparison = null)
    {
        if (is_array($dateDepot)) {
            $useMinMax = false;
            if (isset($dateDepot['min'])) {
                $this->addUsingAlias(CommonQuestionsDcePeer::DATE_DEPOT, $dateDepot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateDepot['max'])) {
                $this->addUsingAlias(CommonQuestionsDcePeer::DATE_DEPOT, $dateDepot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonQuestionsDcePeer::DATE_DEPOT, $dateDepot, $comparison);
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
     * @return CommonQuestionsDceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonQuestionsDcePeer::EMAIL, $email, $comparison);
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
     * @return CommonQuestionsDceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonQuestionsDcePeer::NOM, $nom, $comparison);
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
     * @return CommonQuestionsDceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonQuestionsDcePeer::ENTREPRISE, $entreprise, $comparison);
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
     * @return CommonQuestionsDceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonQuestionsDcePeer::ADRESSE, $adresse, $comparison);
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
     * @return CommonQuestionsDceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonQuestionsDcePeer::CP, $cp, $comparison);
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
     * @return CommonQuestionsDceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonQuestionsDcePeer::VILLE, $ville, $comparison);
    }

    /**
     * Filter the query on the tel column
     *
     * Example usage:
     * <code>
     * $query->filterByTel('fooValue');   // WHERE tel = 'fooValue'
     * $query->filterByTel('%fooValue%'); // WHERE tel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonQuestionsDceQuery The current query, for fluid interface
     */
    public function filterByTel($tel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tel)) {
                $tel = str_replace('*', '%', $tel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonQuestionsDcePeer::TEL, $tel, $comparison);
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
     * @return CommonQuestionsDceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonQuestionsDcePeer::FAX, $fax, $comparison);
    }

    /**
     * Filter the query on the question column
     *
     * Example usage:
     * <code>
     * $query->filterByQuestion('fooValue');   // WHERE question = 'fooValue'
     * $query->filterByQuestion('%fooValue%'); // WHERE question LIKE '%fooValue%'
     * </code>
     *
     * @param     string $question The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonQuestionsDceQuery The current query, for fluid interface
     */
    public function filterByQuestion($question = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($question)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $question)) {
                $question = str_replace('*', '%', $question);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonQuestionsDcePeer::QUESTION, $question, $comparison);
    }

    /**
     * Filter the query on the statut column
     *
     * Example usage:
     * <code>
     * $query->filterByStatut(1234); // WHERE statut = 1234
     * $query->filterByStatut(array(12, 34)); // WHERE statut IN (12, 34)
     * $query->filterByStatut(array('min' => 12)); // WHERE statut >= 12
     * $query->filterByStatut(array('max' => 12)); // WHERE statut <= 12
     * </code>
     *
     * @param     mixed $statut The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonQuestionsDceQuery The current query, for fluid interface
     */
    public function filterByStatut($statut = null, $comparison = null)
    {
        if (is_array($statut)) {
            $useMinMax = false;
            if (isset($statut['min'])) {
                $this->addUsingAlias(CommonQuestionsDcePeer::STATUT, $statut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statut['max'])) {
                $this->addUsingAlias(CommonQuestionsDcePeer::STATUT, $statut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonQuestionsDcePeer::STATUT, $statut, $comparison);
    }

    /**
     * Filter the query on the date_reponse column
     *
     * Example usage:
     * <code>
     * $query->filterByDateReponse('2011-03-14'); // WHERE date_reponse = '2011-03-14'
     * $query->filterByDateReponse('now'); // WHERE date_reponse = '2011-03-14'
     * $query->filterByDateReponse(array('max' => 'yesterday')); // WHERE date_reponse > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateReponse The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonQuestionsDceQuery The current query, for fluid interface
     */
    public function filterByDateReponse($dateReponse = null, $comparison = null)
    {
        if (is_array($dateReponse)) {
            $useMinMax = false;
            if (isset($dateReponse['min'])) {
                $this->addUsingAlias(CommonQuestionsDcePeer::DATE_REPONSE, $dateReponse['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateReponse['max'])) {
                $this->addUsingAlias(CommonQuestionsDcePeer::DATE_REPONSE, $dateReponse['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonQuestionsDcePeer::DATE_REPONSE, $dateReponse, $comparison);
    }

    /**
     * Filter the query on the personne_repondu column
     *
     * Example usage:
     * <code>
     * $query->filterByPersonneRepondu('fooValue');   // WHERE personne_repondu = 'fooValue'
     * $query->filterByPersonneRepondu('%fooValue%'); // WHERE personne_repondu LIKE '%fooValue%'
     * </code>
     *
     * @param     string $personneRepondu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonQuestionsDceQuery The current query, for fluid interface
     */
    public function filterByPersonneRepondu($personneRepondu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($personneRepondu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $personneRepondu)) {
                $personneRepondu = str_replace('*', '%', $personneRepondu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonQuestionsDcePeer::PERSONNE_REPONDU, $personneRepondu, $comparison);
    }

    /**
     * Filter the query on the type_depot column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeDepot('fooValue');   // WHERE type_depot = 'fooValue'
     * $query->filterByTypeDepot('%fooValue%'); // WHERE type_depot LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeDepot The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonQuestionsDceQuery The current query, for fluid interface
     */
    public function filterByTypeDepot($typeDepot = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeDepot)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeDepot)) {
                $typeDepot = str_replace('*', '%', $typeDepot);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonQuestionsDcePeer::TYPE_DEPOT, $typeDepot, $comparison);
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
     * @return CommonQuestionsDceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonQuestionsDcePeer::PAYS, $pays, $comparison);
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
     * @return CommonQuestionsDceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonQuestionsDcePeer::OBSERVATION, $observation, $comparison);
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
     * @return CommonQuestionsDceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonQuestionsDcePeer::SIRET, $siret, $comparison);
    }

    /**
     * Filter the query on the identifiant_national column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentifiantNational('fooValue');   // WHERE identifiant_national = 'fooValue'
     * $query->filterByIdentifiantNational('%fooValue%'); // WHERE identifiant_national LIKE '%fooValue%'
     * </code>
     *
     * @param     string $identifiantNational The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonQuestionsDceQuery The current query, for fluid interface
     */
    public function filterByIdentifiantNational($identifiantNational = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($identifiantNational)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $identifiantNational)) {
                $identifiantNational = str_replace('*', '%', $identifiantNational);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonQuestionsDcePeer::IDENTIFIANT_NATIONAL, $identifiantNational, $comparison);
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
     * @return CommonQuestionsDceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonQuestionsDcePeer::ACRONYME_PAYS, $acronymePays, $comparison);
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
     * @return CommonQuestionsDceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonQuestionsDcePeer::ADRESSE2, $adresse2, $comparison);
    }

    /**
     * Filter the query on the id_fichier column
     *
     * Example usage:
     * <code>
     * $query->filterByIdFichier(1234); // WHERE id_fichier = 1234
     * $query->filterByIdFichier(array(12, 34)); // WHERE id_fichier IN (12, 34)
     * $query->filterByIdFichier(array('min' => 12)); // WHERE id_fichier >= 12
     * $query->filterByIdFichier(array('max' => 12)); // WHERE id_fichier <= 12
     * </code>
     *
     * @param     mixed $idFichier The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonQuestionsDceQuery The current query, for fluid interface
     */
    public function filterByIdFichier($idFichier = null, $comparison = null)
    {
        if (is_array($idFichier)) {
            $useMinMax = false;
            if (isset($idFichier['min'])) {
                $this->addUsingAlias(CommonQuestionsDcePeer::ID_FICHIER, $idFichier['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idFichier['max'])) {
                $this->addUsingAlias(CommonQuestionsDcePeer::ID_FICHIER, $idFichier['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonQuestionsDcePeer::ID_FICHIER, $idFichier, $comparison);
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
     * @return CommonQuestionsDceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonQuestionsDcePeer::NOM_FICHIER, $nomFichier, $comparison);
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
     * @return CommonQuestionsDceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonQuestionsDcePeer::PRENOM, $prenom, $comparison);
    }

    /**
     * Filter the query on the siret_etranger column
     *
     * Example usage:
     * <code>
     * $query->filterBySiretEtranger('fooValue');   // WHERE siret_etranger = 'fooValue'
     * $query->filterBySiretEtranger('%fooValue%'); // WHERE siret_etranger LIKE '%fooValue%'
     * </code>
     *
     * @param     string $siretEtranger The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonQuestionsDceQuery The current query, for fluid interface
     */
    public function filterBySiretEtranger($siretEtranger = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($siretEtranger)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $siretEtranger)) {
                $siretEtranger = str_replace('*', '%', $siretEtranger);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonQuestionsDcePeer::SIRET_ETRANGER, $siretEtranger, $comparison);
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
     * @return CommonQuestionsDceQuery The current query, for fluid interface
     */
    public function filterByIdInscrit($idInscrit = null, $comparison = null)
    {
        if (is_array($idInscrit)) {
            $useMinMax = false;
            if (isset($idInscrit['min'])) {
                $this->addUsingAlias(CommonQuestionsDcePeer::ID_INSCRIT, $idInscrit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idInscrit['max'])) {
                $this->addUsingAlias(CommonQuestionsDcePeer::ID_INSCRIT, $idInscrit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonQuestionsDcePeer::ID_INSCRIT, $idInscrit, $comparison);
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
     * @return CommonQuestionsDceQuery The current query, for fluid interface
     */
    public function filterByIdEntreprise($idEntreprise = null, $comparison = null)
    {
        if (is_array($idEntreprise)) {
            $useMinMax = false;
            if (isset($idEntreprise['min'])) {
                $this->addUsingAlias(CommonQuestionsDcePeer::ID_ENTREPRISE, $idEntreprise['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntreprise['max'])) {
                $this->addUsingAlias(CommonQuestionsDcePeer::ID_ENTREPRISE, $idEntreprise['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonQuestionsDcePeer::ID_ENTREPRISE, $idEntreprise, $comparison);
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
     * @return CommonQuestionsDceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonQuestionsDcePeer::IFU, $ifu, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonQuestionsDce $commonQuestionsDce Object to remove from the list of results
     *
     * @return CommonQuestionsDceQuery The current query, for fluid interface
     */
    public function prune($commonQuestionsDce = null)
    {
        if ($commonQuestionsDce) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonQuestionsDcePeer::ID), $commonQuestionsDce->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonQuestionsDcePeer::ORGANISME), $commonQuestionsDce->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
