<?php


/**
 * Base class that represents a query for the 'demande_achat_ligne' table.
 *
 * 
 *
 * @method CommonDemandeAchatLigneQuery orderByIdDemandeAchatLigne($order = Criteria::ASC) Order by the id_demande_achat_ligne column
 * @method CommonDemandeAchatLigneQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonDemandeAchatLigneQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method CommonDemandeAchatLigneQuery orderByNumeroDemandeAchat($order = Criteria::ASC) Order by the numero_demande_achat column
 * @method CommonDemandeAchatLigneQuery orderByDescriptionDemandeAchat($order = Criteria::ASC) Order by the description_demande_achat column
 * @method CommonDemandeAchatLigneQuery orderByNumeroLigne($order = Criteria::ASC) Order by the numero_ligne column
 * @method CommonDemandeAchatLigneQuery orderByCodeArticle($order = Criteria::ASC) Order by the code_article column
 * @method CommonDemandeAchatLigneQuery orderByDescriptionLigne($order = Criteria::ASC) Order by the description_ligne column
 * @method CommonDemandeAchatLigneQuery orderByStatut($order = Criteria::ASC) Order by the statut column
 * @method CommonDemandeAchatLigneQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 * @method CommonDemandeAchatLigneQuery orderByLot($order = Criteria::ASC) Order by the lot column
 * @method CommonDemandeAchatLigneQuery orderByQuantite($order = Criteria::ASC) Order by the quantite column
 * @method CommonDemandeAchatLigneQuery orderByUnite($order = Criteria::ASC) Order by the unite column
 * @method CommonDemandeAchatLigneQuery orderBySite($order = Criteria::ASC) Order by the site column
 * @method CommonDemandeAchatLigneQuery orderByPort($order = Criteria::ASC) Order by the port column
 *
 * @method CommonDemandeAchatLigneQuery groupByIdDemandeAchatLigne() Group by the id_demande_achat_ligne column
 * @method CommonDemandeAchatLigneQuery groupByOrganisme() Group by the organisme column
 * @method CommonDemandeAchatLigneQuery groupByEmail() Group by the email column
 * @method CommonDemandeAchatLigneQuery groupByNumeroDemandeAchat() Group by the numero_demande_achat column
 * @method CommonDemandeAchatLigneQuery groupByDescriptionDemandeAchat() Group by the description_demande_achat column
 * @method CommonDemandeAchatLigneQuery groupByNumeroLigne() Group by the numero_ligne column
 * @method CommonDemandeAchatLigneQuery groupByCodeArticle() Group by the code_article column
 * @method CommonDemandeAchatLigneQuery groupByDescriptionLigne() Group by the description_ligne column
 * @method CommonDemandeAchatLigneQuery groupByStatut() Group by the statut column
 * @method CommonDemandeAchatLigneQuery groupByConsultationRef() Group by the consultation_ref column
 * @method CommonDemandeAchatLigneQuery groupByLot() Group by the lot column
 * @method CommonDemandeAchatLigneQuery groupByQuantite() Group by the quantite column
 * @method CommonDemandeAchatLigneQuery groupByUnite() Group by the unite column
 * @method CommonDemandeAchatLigneQuery groupBySite() Group by the site column
 * @method CommonDemandeAchatLigneQuery groupByPort() Group by the port column
 *
 * @method CommonDemandeAchatLigneQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonDemandeAchatLigneQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonDemandeAchatLigneQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonDemandeAchatLigne findOne(PropelPDO $con = null) Return the first CommonDemandeAchatLigne matching the query
 * @method CommonDemandeAchatLigne findOneOrCreate(PropelPDO $con = null) Return the first CommonDemandeAchatLigne matching the query, or a new CommonDemandeAchatLigne object populated from the query conditions when no match is found
 *
 * @method CommonDemandeAchatLigne findOneByOrganisme(string $organisme) Return the first CommonDemandeAchatLigne filtered by the organisme column
 * @method CommonDemandeAchatLigne findOneByEmail(string $email) Return the first CommonDemandeAchatLigne filtered by the email column
 * @method CommonDemandeAchatLigne findOneByNumeroDemandeAchat(string $numero_demande_achat) Return the first CommonDemandeAchatLigne filtered by the numero_demande_achat column
 * @method CommonDemandeAchatLigne findOneByDescriptionDemandeAchat(string $description_demande_achat) Return the first CommonDemandeAchatLigne filtered by the description_demande_achat column
 * @method CommonDemandeAchatLigne findOneByNumeroLigne(int $numero_ligne) Return the first CommonDemandeAchatLigne filtered by the numero_ligne column
 * @method CommonDemandeAchatLigne findOneByCodeArticle(string $code_article) Return the first CommonDemandeAchatLigne filtered by the code_article column
 * @method CommonDemandeAchatLigne findOneByDescriptionLigne(string $description_ligne) Return the first CommonDemandeAchatLigne filtered by the description_ligne column
 * @method CommonDemandeAchatLigne findOneByStatut(int $statut) Return the first CommonDemandeAchatLigne filtered by the statut column
 * @method CommonDemandeAchatLigne findOneByConsultationRef(int $consultation_ref) Return the first CommonDemandeAchatLigne filtered by the consultation_ref column
 * @method CommonDemandeAchatLigne findOneByLot(int $lot) Return the first CommonDemandeAchatLigne filtered by the lot column
 * @method CommonDemandeAchatLigne findOneByQuantite(int $quantite) Return the first CommonDemandeAchatLigne filtered by the quantite column
 * @method CommonDemandeAchatLigne findOneByUnite(string $unite) Return the first CommonDemandeAchatLigne filtered by the unite column
 * @method CommonDemandeAchatLigne findOneBySite(string $site) Return the first CommonDemandeAchatLigne filtered by the site column
 * @method CommonDemandeAchatLigne findOneByPort(string $port) Return the first CommonDemandeAchatLigne filtered by the port column
 *
 * @method array findByIdDemandeAchatLigne(int $id_demande_achat_ligne) Return CommonDemandeAchatLigne objects filtered by the id_demande_achat_ligne column
 * @method array findByOrganisme(string $organisme) Return CommonDemandeAchatLigne objects filtered by the organisme column
 * @method array findByEmail(string $email) Return CommonDemandeAchatLigne objects filtered by the email column
 * @method array findByNumeroDemandeAchat(string $numero_demande_achat) Return CommonDemandeAchatLigne objects filtered by the numero_demande_achat column
 * @method array findByDescriptionDemandeAchat(string $description_demande_achat) Return CommonDemandeAchatLigne objects filtered by the description_demande_achat column
 * @method array findByNumeroLigne(int $numero_ligne) Return CommonDemandeAchatLigne objects filtered by the numero_ligne column
 * @method array findByCodeArticle(string $code_article) Return CommonDemandeAchatLigne objects filtered by the code_article column
 * @method array findByDescriptionLigne(string $description_ligne) Return CommonDemandeAchatLigne objects filtered by the description_ligne column
 * @method array findByStatut(int $statut) Return CommonDemandeAchatLigne objects filtered by the statut column
 * @method array findByConsultationRef(int $consultation_ref) Return CommonDemandeAchatLigne objects filtered by the consultation_ref column
 * @method array findByLot(int $lot) Return CommonDemandeAchatLigne objects filtered by the lot column
 * @method array findByQuantite(int $quantite) Return CommonDemandeAchatLigne objects filtered by the quantite column
 * @method array findByUnite(string $unite) Return CommonDemandeAchatLigne objects filtered by the unite column
 * @method array findBySite(string $site) Return CommonDemandeAchatLigne objects filtered by the site column
 * @method array findByPort(string $port) Return CommonDemandeAchatLigne objects filtered by the port column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonDemandeAchatLigneQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonDemandeAchatLigneQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonDemandeAchatLigne', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonDemandeAchatLigneQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonDemandeAchatLigneQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonDemandeAchatLigneQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonDemandeAchatLigneQuery) {
            return $criteria;
        }
        $query = new CommonDemandeAchatLigneQuery();
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
     * @return   CommonDemandeAchatLigne|CommonDemandeAchatLigne[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonDemandeAchatLignePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonDemandeAchatLignePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonDemandeAchatLigne A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdDemandeAchatLigne($key, $con = null)
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
     * @return                 CommonDemandeAchatLigne A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_demande_achat_ligne`, `organisme`, `email`, `numero_demande_achat`, `description_demande_achat`, `numero_ligne`, `code_article`, `description_ligne`, `statut`, `consultation_ref`, `lot`, `quantite`, `unite`, `site`, `port` FROM `demande_achat_ligne` WHERE `id_demande_achat_ligne` = :p0';
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
            $obj = new CommonDemandeAchatLigne();
            $obj->hydrate($row);
            CommonDemandeAchatLignePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonDemandeAchatLigne|CommonDemandeAchatLigne[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonDemandeAchatLigne[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonDemandeAchatLigneQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonDemandeAchatLignePeer::ID_DEMANDE_ACHAT_LIGNE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonDemandeAchatLigneQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonDemandeAchatLignePeer::ID_DEMANDE_ACHAT_LIGNE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_demande_achat_ligne column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDemandeAchatLigne(1234); // WHERE id_demande_achat_ligne = 1234
     * $query->filterByIdDemandeAchatLigne(array(12, 34)); // WHERE id_demande_achat_ligne IN (12, 34)
     * $query->filterByIdDemandeAchatLigne(array('min' => 12)); // WHERE id_demande_achat_ligne >= 12
     * $query->filterByIdDemandeAchatLigne(array('max' => 12)); // WHERE id_demande_achat_ligne <= 12
     * </code>
     *
     * @param     mixed $idDemandeAchatLigne The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDemandeAchatLigneQuery The current query, for fluid interface
     */
    public function filterByIdDemandeAchatLigne($idDemandeAchatLigne = null, $comparison = null)
    {
        if (is_array($idDemandeAchatLigne)) {
            $useMinMax = false;
            if (isset($idDemandeAchatLigne['min'])) {
                $this->addUsingAlias(CommonDemandeAchatLignePeer::ID_DEMANDE_ACHAT_LIGNE, $idDemandeAchatLigne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDemandeAchatLigne['max'])) {
                $this->addUsingAlias(CommonDemandeAchatLignePeer::ID_DEMANDE_ACHAT_LIGNE, $idDemandeAchatLigne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDemandeAchatLignePeer::ID_DEMANDE_ACHAT_LIGNE, $idDemandeAchatLigne, $comparison);
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
     * @return CommonDemandeAchatLigneQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonDemandeAchatLignePeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonDemandeAchatLigneQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonDemandeAchatLignePeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the numero_demande_achat column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroDemandeAchat('fooValue');   // WHERE numero_demande_achat = 'fooValue'
     * $query->filterByNumeroDemandeAchat('%fooValue%'); // WHERE numero_demande_achat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numeroDemandeAchat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDemandeAchatLigneQuery The current query, for fluid interface
     */
    public function filterByNumeroDemandeAchat($numeroDemandeAchat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numeroDemandeAchat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numeroDemandeAchat)) {
                $numeroDemandeAchat = str_replace('*', '%', $numeroDemandeAchat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDemandeAchatLignePeer::NUMERO_DEMANDE_ACHAT, $numeroDemandeAchat, $comparison);
    }

    /**
     * Filter the query on the description_demande_achat column
     *
     * Example usage:
     * <code>
     * $query->filterByDescriptionDemandeAchat('fooValue');   // WHERE description_demande_achat = 'fooValue'
     * $query->filterByDescriptionDemandeAchat('%fooValue%'); // WHERE description_demande_achat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descriptionDemandeAchat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDemandeAchatLigneQuery The current query, for fluid interface
     */
    public function filterByDescriptionDemandeAchat($descriptionDemandeAchat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descriptionDemandeAchat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descriptionDemandeAchat)) {
                $descriptionDemandeAchat = str_replace('*', '%', $descriptionDemandeAchat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDemandeAchatLignePeer::DESCRIPTION_DEMANDE_ACHAT, $descriptionDemandeAchat, $comparison);
    }

    /**
     * Filter the query on the numero_ligne column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroLigne(1234); // WHERE numero_ligne = 1234
     * $query->filterByNumeroLigne(array(12, 34)); // WHERE numero_ligne IN (12, 34)
     * $query->filterByNumeroLigne(array('min' => 12)); // WHERE numero_ligne >= 12
     * $query->filterByNumeroLigne(array('max' => 12)); // WHERE numero_ligne <= 12
     * </code>
     *
     * @param     mixed $numeroLigne The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDemandeAchatLigneQuery The current query, for fluid interface
     */
    public function filterByNumeroLigne($numeroLigne = null, $comparison = null)
    {
        if (is_array($numeroLigne)) {
            $useMinMax = false;
            if (isset($numeroLigne['min'])) {
                $this->addUsingAlias(CommonDemandeAchatLignePeer::NUMERO_LIGNE, $numeroLigne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numeroLigne['max'])) {
                $this->addUsingAlias(CommonDemandeAchatLignePeer::NUMERO_LIGNE, $numeroLigne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDemandeAchatLignePeer::NUMERO_LIGNE, $numeroLigne, $comparison);
    }

    /**
     * Filter the query on the code_article column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeArticle('fooValue');   // WHERE code_article = 'fooValue'
     * $query->filterByCodeArticle('%fooValue%'); // WHERE code_article LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeArticle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDemandeAchatLigneQuery The current query, for fluid interface
     */
    public function filterByCodeArticle($codeArticle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeArticle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeArticle)) {
                $codeArticle = str_replace('*', '%', $codeArticle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDemandeAchatLignePeer::CODE_ARTICLE, $codeArticle, $comparison);
    }

    /**
     * Filter the query on the description_ligne column
     *
     * Example usage:
     * <code>
     * $query->filterByDescriptionLigne('fooValue');   // WHERE description_ligne = 'fooValue'
     * $query->filterByDescriptionLigne('%fooValue%'); // WHERE description_ligne LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descriptionLigne The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDemandeAchatLigneQuery The current query, for fluid interface
     */
    public function filterByDescriptionLigne($descriptionLigne = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descriptionLigne)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descriptionLigne)) {
                $descriptionLigne = str_replace('*', '%', $descriptionLigne);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDemandeAchatLignePeer::DESCRIPTION_LIGNE, $descriptionLigne, $comparison);
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
     * @return CommonDemandeAchatLigneQuery The current query, for fluid interface
     */
    public function filterByStatut($statut = null, $comparison = null)
    {
        if (is_array($statut)) {
            $useMinMax = false;
            if (isset($statut['min'])) {
                $this->addUsingAlias(CommonDemandeAchatLignePeer::STATUT, $statut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statut['max'])) {
                $this->addUsingAlias(CommonDemandeAchatLignePeer::STATUT, $statut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDemandeAchatLignePeer::STATUT, $statut, $comparison);
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
     * @return CommonDemandeAchatLigneQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(CommonDemandeAchatLignePeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(CommonDemandeAchatLignePeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDemandeAchatLignePeer::CONSULTATION_REF, $consultationRef, $comparison);
    }

    /**
     * Filter the query on the lot column
     *
     * Example usage:
     * <code>
     * $query->filterByLot(1234); // WHERE lot = 1234
     * $query->filterByLot(array(12, 34)); // WHERE lot IN (12, 34)
     * $query->filterByLot(array('min' => 12)); // WHERE lot >= 12
     * $query->filterByLot(array('max' => 12)); // WHERE lot <= 12
     * </code>
     *
     * @param     mixed $lot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDemandeAchatLigneQuery The current query, for fluid interface
     */
    public function filterByLot($lot = null, $comparison = null)
    {
        if (is_array($lot)) {
            $useMinMax = false;
            if (isset($lot['min'])) {
                $this->addUsingAlias(CommonDemandeAchatLignePeer::LOT, $lot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lot['max'])) {
                $this->addUsingAlias(CommonDemandeAchatLignePeer::LOT, $lot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDemandeAchatLignePeer::LOT, $lot, $comparison);
    }

    /**
     * Filter the query on the quantite column
     *
     * Example usage:
     * <code>
     * $query->filterByQuantite(1234); // WHERE quantite = 1234
     * $query->filterByQuantite(array(12, 34)); // WHERE quantite IN (12, 34)
     * $query->filterByQuantite(array('min' => 12)); // WHERE quantite >= 12
     * $query->filterByQuantite(array('max' => 12)); // WHERE quantite <= 12
     * </code>
     *
     * @param     mixed $quantite The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDemandeAchatLigneQuery The current query, for fluid interface
     */
    public function filterByQuantite($quantite = null, $comparison = null)
    {
        if (is_array($quantite)) {
            $useMinMax = false;
            if (isset($quantite['min'])) {
                $this->addUsingAlias(CommonDemandeAchatLignePeer::QUANTITE, $quantite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($quantite['max'])) {
                $this->addUsingAlias(CommonDemandeAchatLignePeer::QUANTITE, $quantite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDemandeAchatLignePeer::QUANTITE, $quantite, $comparison);
    }

    /**
     * Filter the query on the unite column
     *
     * Example usage:
     * <code>
     * $query->filterByUnite('fooValue');   // WHERE unite = 'fooValue'
     * $query->filterByUnite('%fooValue%'); // WHERE unite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $unite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDemandeAchatLigneQuery The current query, for fluid interface
     */
    public function filterByUnite($unite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($unite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $unite)) {
                $unite = str_replace('*', '%', $unite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDemandeAchatLignePeer::UNITE, $unite, $comparison);
    }

    /**
     * Filter the query on the site column
     *
     * Example usage:
     * <code>
     * $query->filterBySite('fooValue');   // WHERE site = 'fooValue'
     * $query->filterBySite('%fooValue%'); // WHERE site LIKE '%fooValue%'
     * </code>
     *
     * @param     string $site The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDemandeAchatLigneQuery The current query, for fluid interface
     */
    public function filterBySite($site = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($site)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $site)) {
                $site = str_replace('*', '%', $site);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDemandeAchatLignePeer::SITE, $site, $comparison);
    }

    /**
     * Filter the query on the port column
     *
     * Example usage:
     * <code>
     * $query->filterByPort('fooValue');   // WHERE port = 'fooValue'
     * $query->filterByPort('%fooValue%'); // WHERE port LIKE '%fooValue%'
     * </code>
     *
     * @param     string $port The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDemandeAchatLigneQuery The current query, for fluid interface
     */
    public function filterByPort($port = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($port)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $port)) {
                $port = str_replace('*', '%', $port);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDemandeAchatLignePeer::PORT, $port, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonDemandeAchatLigne $commonDemandeAchatLigne Object to remove from the list of results
     *
     * @return CommonDemandeAchatLigneQuery The current query, for fluid interface
     */
    public function prune($commonDemandeAchatLigne = null)
    {
        if ($commonDemandeAchatLigne) {
            $this->addUsingAlias(CommonDemandeAchatLignePeer::ID_DEMANDE_ACHAT_LIGNE, $commonDemandeAchatLigne->getIdDemandeAchatLigne(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
