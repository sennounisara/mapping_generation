<?php


/**
 * Base class that represents a query for the 'demande_complement' table.
 *
 * 
 *
 * @method CommonDemandeComplementQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonDemandeComplementQuery orderByIdResultatAnalyseDecison($order = Criteria::ASC) Order by the id_resultat_analyse_decison column
 * @method CommonDemandeComplementQuery orderByDateEnvoie($order = Criteria::ASC) Order by the date_envoie column
 * @method CommonDemandeComplementQuery orderByDateReception($order = Criteria::ASC) Order by the date_reception column
 * @method CommonDemandeComplementQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method CommonDemandeComplementQuery orderByNomEntreprise($order = Criteria::ASC) Order by the nom_entreprise column
 * @method CommonDemandeComplementQuery orderByObjet($order = Criteria::ASC) Order by the objet column
 * @method CommonDemandeComplementQuery orderByMessage($order = Criteria::ASC) Order by the message column
 * @method CommonDemandeComplementQuery orderByUid($order = Criteria::ASC) Order by the uid column
 * @method CommonDemandeComplementQuery orderByMessageReponse($order = Criteria::ASC) Order by the message_reponse column
 * @method CommonDemandeComplementQuery orderByStatut($order = Criteria::ASC) Order by the statut column
 * @method CommonDemandeComplementQuery orderByDateAccuseReception($order = Criteria::ASC) Order by the date_accuse_reception column
 *
 * @method CommonDemandeComplementQuery groupById() Group by the id column
 * @method CommonDemandeComplementQuery groupByIdResultatAnalyseDecison() Group by the id_resultat_analyse_decison column
 * @method CommonDemandeComplementQuery groupByDateEnvoie() Group by the date_envoie column
 * @method CommonDemandeComplementQuery groupByDateReception() Group by the date_reception column
 * @method CommonDemandeComplementQuery groupByEmail() Group by the email column
 * @method CommonDemandeComplementQuery groupByNomEntreprise() Group by the nom_entreprise column
 * @method CommonDemandeComplementQuery groupByObjet() Group by the objet column
 * @method CommonDemandeComplementQuery groupByMessage() Group by the message column
 * @method CommonDemandeComplementQuery groupByUid() Group by the uid column
 * @method CommonDemandeComplementQuery groupByMessageReponse() Group by the message_reponse column
 * @method CommonDemandeComplementQuery groupByStatut() Group by the statut column
 * @method CommonDemandeComplementQuery groupByDateAccuseReception() Group by the date_accuse_reception column
 *
 * @method CommonDemandeComplementQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonDemandeComplementQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonDemandeComplementQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonDemandeComplement findOne(PropelPDO $con = null) Return the first CommonDemandeComplement matching the query
 * @method CommonDemandeComplement findOneOrCreate(PropelPDO $con = null) Return the first CommonDemandeComplement matching the query, or a new CommonDemandeComplement object populated from the query conditions when no match is found
 *
 * @method CommonDemandeComplement findOneByIdResultatAnalyseDecison(int $id_resultat_analyse_decison) Return the first CommonDemandeComplement filtered by the id_resultat_analyse_decison column
 * @method CommonDemandeComplement findOneByDateEnvoie(string $date_envoie) Return the first CommonDemandeComplement filtered by the date_envoie column
 * @method CommonDemandeComplement findOneByDateReception(string $date_reception) Return the first CommonDemandeComplement filtered by the date_reception column
 * @method CommonDemandeComplement findOneByEmail(string $email) Return the first CommonDemandeComplement filtered by the email column
 * @method CommonDemandeComplement findOneByNomEntreprise(string $nom_entreprise) Return the first CommonDemandeComplement filtered by the nom_entreprise column
 * @method CommonDemandeComplement findOneByObjet(string $objet) Return the first CommonDemandeComplement filtered by the objet column
 * @method CommonDemandeComplement findOneByMessage(string $message) Return the first CommonDemandeComplement filtered by the message column
 * @method CommonDemandeComplement findOneByUid(string $uid) Return the first CommonDemandeComplement filtered by the uid column
 * @method CommonDemandeComplement findOneByMessageReponse(string $message_reponse) Return the first CommonDemandeComplement filtered by the message_reponse column
 * @method CommonDemandeComplement findOneByStatut(int $statut) Return the first CommonDemandeComplement filtered by the statut column
 * @method CommonDemandeComplement findOneByDateAccuseReception(string $date_accuse_reception) Return the first CommonDemandeComplement filtered by the date_accuse_reception column
 *
 * @method array findById(int $id) Return CommonDemandeComplement objects filtered by the id column
 * @method array findByIdResultatAnalyseDecison(int $id_resultat_analyse_decison) Return CommonDemandeComplement objects filtered by the id_resultat_analyse_decison column
 * @method array findByDateEnvoie(string $date_envoie) Return CommonDemandeComplement objects filtered by the date_envoie column
 * @method array findByDateReception(string $date_reception) Return CommonDemandeComplement objects filtered by the date_reception column
 * @method array findByEmail(string $email) Return CommonDemandeComplement objects filtered by the email column
 * @method array findByNomEntreprise(string $nom_entreprise) Return CommonDemandeComplement objects filtered by the nom_entreprise column
 * @method array findByObjet(string $objet) Return CommonDemandeComplement objects filtered by the objet column
 * @method array findByMessage(string $message) Return CommonDemandeComplement objects filtered by the message column
 * @method array findByUid(string $uid) Return CommonDemandeComplement objects filtered by the uid column
 * @method array findByMessageReponse(string $message_reponse) Return CommonDemandeComplement objects filtered by the message_reponse column
 * @method array findByStatut(int $statut) Return CommonDemandeComplement objects filtered by the statut column
 * @method array findByDateAccuseReception(string $date_accuse_reception) Return CommonDemandeComplement objects filtered by the date_accuse_reception column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonDemandeComplementQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonDemandeComplementQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonDemandeComplement', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonDemandeComplementQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonDemandeComplementQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonDemandeComplementQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonDemandeComplementQuery) {
            return $criteria;
        }
        $query = new CommonDemandeComplementQuery();
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
     * @return   CommonDemandeComplement|CommonDemandeComplement[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonDemandeComplementPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonDemandeComplementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonDemandeComplement A model object, or null if the key is not found
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
     * @return                 CommonDemandeComplement A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_resultat_analyse_decison`, `date_envoie`, `date_reception`, `email`, `nom_entreprise`, `objet`, `message`, `uid`, `message_reponse`, `statut`, `date_accuse_reception` FROM `demande_complement` WHERE `id` = :p0';
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
            $obj = new CommonDemandeComplement();
            $obj->hydrate($row);
            CommonDemandeComplementPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonDemandeComplement|CommonDemandeComplement[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonDemandeComplement[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonDemandeComplementQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonDemandeComplementPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonDemandeComplementQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonDemandeComplementPeer::ID, $keys, Criteria::IN);
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
     * @return CommonDemandeComplementQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonDemandeComplementPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonDemandeComplementPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDemandeComplementPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_resultat_analyse_decison column
     *
     * Example usage:
     * <code>
     * $query->filterByIdResultatAnalyseDecison(1234); // WHERE id_resultat_analyse_decison = 1234
     * $query->filterByIdResultatAnalyseDecison(array(12, 34)); // WHERE id_resultat_analyse_decison IN (12, 34)
     * $query->filterByIdResultatAnalyseDecison(array('min' => 12)); // WHERE id_resultat_analyse_decison >= 12
     * $query->filterByIdResultatAnalyseDecison(array('max' => 12)); // WHERE id_resultat_analyse_decison <= 12
     * </code>
     *
     * @param     mixed $idResultatAnalyseDecison The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDemandeComplementQuery The current query, for fluid interface
     */
    public function filterByIdResultatAnalyseDecison($idResultatAnalyseDecison = null, $comparison = null)
    {
        if (is_array($idResultatAnalyseDecison)) {
            $useMinMax = false;
            if (isset($idResultatAnalyseDecison['min'])) {
                $this->addUsingAlias(CommonDemandeComplementPeer::ID_RESULTAT_ANALYSE_DECISON, $idResultatAnalyseDecison['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idResultatAnalyseDecison['max'])) {
                $this->addUsingAlias(CommonDemandeComplementPeer::ID_RESULTAT_ANALYSE_DECISON, $idResultatAnalyseDecison['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDemandeComplementPeer::ID_RESULTAT_ANALYSE_DECISON, $idResultatAnalyseDecison, $comparison);
    }

    /**
     * Filter the query on the date_envoie column
     *
     * Example usage:
     * <code>
     * $query->filterByDateEnvoie('2011-03-14'); // WHERE date_envoie = '2011-03-14'
     * $query->filterByDateEnvoie('now'); // WHERE date_envoie = '2011-03-14'
     * $query->filterByDateEnvoie(array('max' => 'yesterday')); // WHERE date_envoie > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateEnvoie The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDemandeComplementQuery The current query, for fluid interface
     */
    public function filterByDateEnvoie($dateEnvoie = null, $comparison = null)
    {
        if (is_array($dateEnvoie)) {
            $useMinMax = false;
            if (isset($dateEnvoie['min'])) {
                $this->addUsingAlias(CommonDemandeComplementPeer::DATE_ENVOIE, $dateEnvoie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateEnvoie['max'])) {
                $this->addUsingAlias(CommonDemandeComplementPeer::DATE_ENVOIE, $dateEnvoie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDemandeComplementPeer::DATE_ENVOIE, $dateEnvoie, $comparison);
    }

    /**
     * Filter the query on the date_reception column
     *
     * Example usage:
     * <code>
     * $query->filterByDateReception('2011-03-14'); // WHERE date_reception = '2011-03-14'
     * $query->filterByDateReception('now'); // WHERE date_reception = '2011-03-14'
     * $query->filterByDateReception(array('max' => 'yesterday')); // WHERE date_reception > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateReception The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDemandeComplementQuery The current query, for fluid interface
     */
    public function filterByDateReception($dateReception = null, $comparison = null)
    {
        if (is_array($dateReception)) {
            $useMinMax = false;
            if (isset($dateReception['min'])) {
                $this->addUsingAlias(CommonDemandeComplementPeer::DATE_RECEPTION, $dateReception['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateReception['max'])) {
                $this->addUsingAlias(CommonDemandeComplementPeer::DATE_RECEPTION, $dateReception['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDemandeComplementPeer::DATE_RECEPTION, $dateReception, $comparison);
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
     * @return CommonDemandeComplementQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonDemandeComplementPeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the nom_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByNomEntreprise('fooValue');   // WHERE nom_entreprise = 'fooValue'
     * $query->filterByNomEntreprise('%fooValue%'); // WHERE nom_entreprise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomEntreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDemandeComplementQuery The current query, for fluid interface
     */
    public function filterByNomEntreprise($nomEntreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomEntreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomEntreprise)) {
                $nomEntreprise = str_replace('*', '%', $nomEntreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDemandeComplementPeer::NOM_ENTREPRISE, $nomEntreprise, $comparison);
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
     * @return CommonDemandeComplementQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonDemandeComplementPeer::OBJET, $objet, $comparison);
    }

    /**
     * Filter the query on the message column
     *
     * Example usage:
     * <code>
     * $query->filterByMessage('fooValue');   // WHERE message = 'fooValue'
     * $query->filterByMessage('%fooValue%'); // WHERE message LIKE '%fooValue%'
     * </code>
     *
     * @param     string $message The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDemandeComplementQuery The current query, for fluid interface
     */
    public function filterByMessage($message = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($message)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $message)) {
                $message = str_replace('*', '%', $message);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDemandeComplementPeer::MESSAGE, $message, $comparison);
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
     * @return CommonDemandeComplementQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonDemandeComplementPeer::UID, $uid, $comparison);
    }

    /**
     * Filter the query on the message_reponse column
     *
     * Example usage:
     * <code>
     * $query->filterByMessageReponse('fooValue');   // WHERE message_reponse = 'fooValue'
     * $query->filterByMessageReponse('%fooValue%'); // WHERE message_reponse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $messageReponse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDemandeComplementQuery The current query, for fluid interface
     */
    public function filterByMessageReponse($messageReponse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($messageReponse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $messageReponse)) {
                $messageReponse = str_replace('*', '%', $messageReponse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDemandeComplementPeer::MESSAGE_REPONSE, $messageReponse, $comparison);
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
     * @return CommonDemandeComplementQuery The current query, for fluid interface
     */
    public function filterByStatut($statut = null, $comparison = null)
    {
        if (is_array($statut)) {
            $useMinMax = false;
            if (isset($statut['min'])) {
                $this->addUsingAlias(CommonDemandeComplementPeer::STATUT, $statut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statut['max'])) {
                $this->addUsingAlias(CommonDemandeComplementPeer::STATUT, $statut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDemandeComplementPeer::STATUT, $statut, $comparison);
    }

    /**
     * Filter the query on the date_accuse_reception column
     *
     * Example usage:
     * <code>
     * $query->filterByDateAccuseReception('2011-03-14'); // WHERE date_accuse_reception = '2011-03-14'
     * $query->filterByDateAccuseReception('now'); // WHERE date_accuse_reception = '2011-03-14'
     * $query->filterByDateAccuseReception(array('max' => 'yesterday')); // WHERE date_accuse_reception > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateAccuseReception The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDemandeComplementQuery The current query, for fluid interface
     */
    public function filterByDateAccuseReception($dateAccuseReception = null, $comparison = null)
    {
        if (is_array($dateAccuseReception)) {
            $useMinMax = false;
            if (isset($dateAccuseReception['min'])) {
                $this->addUsingAlias(CommonDemandeComplementPeer::DATE_ACCUSE_RECEPTION, $dateAccuseReception['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateAccuseReception['max'])) {
                $this->addUsingAlias(CommonDemandeComplementPeer::DATE_ACCUSE_RECEPTION, $dateAccuseReception['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDemandeComplementPeer::DATE_ACCUSE_RECEPTION, $dateAccuseReception, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonDemandeComplement $commonDemandeComplement Object to remove from the list of results
     *
     * @return CommonDemandeComplementQuery The current query, for fluid interface
     */
    public function prune($commonDemandeComplement = null)
    {
        if ($commonDemandeComplement) {
            $this->addUsingAlias(CommonDemandeComplementPeer::ID, $commonDemandeComplement->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
