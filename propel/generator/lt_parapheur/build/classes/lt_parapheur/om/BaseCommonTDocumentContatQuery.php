<?php


/**
 * Base class that represents a query for the 't_document_contat' table.
 *
 * 
 *
 * @method CommonTDocumentContatQuery orderByIdDocument($order = Criteria::ASC) Order by the id_document column
 * @method CommonTDocumentContatQuery orderByIdContrat($order = Criteria::ASC) Order by the id_contrat column
 * @method CommonTDocumentContatQuery orderByTypeDocument($order = Criteria::ASC) Order by the type_document column
 * @method CommonTDocumentContatQuery orderByNomDocument($order = Criteria::ASC) Order by the nom_document column
 * @method CommonTDocumentContatQuery orderByTitreDocument($order = Criteria::ASC) Order by the titre_document column
 * @method CommonTDocumentContatQuery orderByDateCreation($order = Criteria::ASC) Order by the date_creation column
 * @method CommonTDocumentContatQuery orderByDateModification($order = Criteria::ASC) Order by the date_modification column
 * @method CommonTDocumentContatQuery orderByIdAgent($order = Criteria::ASC) Order by the id_agent column
 * @method CommonTDocumentContatQuery orderByNomAgent($order = Criteria::ASC) Order by the nom_agent column
 * @method CommonTDocumentContatQuery orderByPrenomAgent($order = Criteria::ASC) Order by the prenom_agent column
 * @method CommonTDocumentContatQuery orderByIdBlob($order = Criteria::ASC) Order by the id_blob column
 * @method CommonTDocumentContatQuery orderByTailleDocument($order = Criteria::ASC) Order by the taille_document column
 * @method CommonTDocumentContatQuery orderByExtensionDocument($order = Criteria::ASC) Order by the extension_document column
 *
 * @method CommonTDocumentContatQuery groupByIdDocument() Group by the id_document column
 * @method CommonTDocumentContatQuery groupByIdContrat() Group by the id_contrat column
 * @method CommonTDocumentContatQuery groupByTypeDocument() Group by the type_document column
 * @method CommonTDocumentContatQuery groupByNomDocument() Group by the nom_document column
 * @method CommonTDocumentContatQuery groupByTitreDocument() Group by the titre_document column
 * @method CommonTDocumentContatQuery groupByDateCreation() Group by the date_creation column
 * @method CommonTDocumentContatQuery groupByDateModification() Group by the date_modification column
 * @method CommonTDocumentContatQuery groupByIdAgent() Group by the id_agent column
 * @method CommonTDocumentContatQuery groupByNomAgent() Group by the nom_agent column
 * @method CommonTDocumentContatQuery groupByPrenomAgent() Group by the prenom_agent column
 * @method CommonTDocumentContatQuery groupByIdBlob() Group by the id_blob column
 * @method CommonTDocumentContatQuery groupByTailleDocument() Group by the taille_document column
 * @method CommonTDocumentContatQuery groupByExtensionDocument() Group by the extension_document column
 *
 * @method CommonTDocumentContatQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTDocumentContatQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTDocumentContatQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTDocumentContat findOne(PropelPDO $con = null) Return the first CommonTDocumentContat matching the query
 * @method CommonTDocumentContat findOneOrCreate(PropelPDO $con = null) Return the first CommonTDocumentContat matching the query, or a new CommonTDocumentContat object populated from the query conditions when no match is found
 *
 * @method CommonTDocumentContat findOneByIdContrat(int $id_contrat) Return the first CommonTDocumentContat filtered by the id_contrat column
 * @method CommonTDocumentContat findOneByTypeDocument(int $type_document) Return the first CommonTDocumentContat filtered by the type_document column
 * @method CommonTDocumentContat findOneByNomDocument(string $nom_document) Return the first CommonTDocumentContat filtered by the nom_document column
 * @method CommonTDocumentContat findOneByTitreDocument(string $titre_document) Return the first CommonTDocumentContat filtered by the titre_document column
 * @method CommonTDocumentContat findOneByDateCreation(string $date_creation) Return the first CommonTDocumentContat filtered by the date_creation column
 * @method CommonTDocumentContat findOneByDateModification(string $date_modification) Return the first CommonTDocumentContat filtered by the date_modification column
 * @method CommonTDocumentContat findOneByIdAgent(int $id_agent) Return the first CommonTDocumentContat filtered by the id_agent column
 * @method CommonTDocumentContat findOneByNomAgent(string $nom_agent) Return the first CommonTDocumentContat filtered by the nom_agent column
 * @method CommonTDocumentContat findOneByPrenomAgent(string $prenom_agent) Return the first CommonTDocumentContat filtered by the prenom_agent column
 * @method CommonTDocumentContat findOneByIdBlob(int $id_blob) Return the first CommonTDocumentContat filtered by the id_blob column
 * @method CommonTDocumentContat findOneByTailleDocument(string $taille_document) Return the first CommonTDocumentContat filtered by the taille_document column
 * @method CommonTDocumentContat findOneByExtensionDocument(string $extension_document) Return the first CommonTDocumentContat filtered by the extension_document column
 *
 * @method array findByIdDocument(int $id_document) Return CommonTDocumentContat objects filtered by the id_document column
 * @method array findByIdContrat(int $id_contrat) Return CommonTDocumentContat objects filtered by the id_contrat column
 * @method array findByTypeDocument(int $type_document) Return CommonTDocumentContat objects filtered by the type_document column
 * @method array findByNomDocument(string $nom_document) Return CommonTDocumentContat objects filtered by the nom_document column
 * @method array findByTitreDocument(string $titre_document) Return CommonTDocumentContat objects filtered by the titre_document column
 * @method array findByDateCreation(string $date_creation) Return CommonTDocumentContat objects filtered by the date_creation column
 * @method array findByDateModification(string $date_modification) Return CommonTDocumentContat objects filtered by the date_modification column
 * @method array findByIdAgent(int $id_agent) Return CommonTDocumentContat objects filtered by the id_agent column
 * @method array findByNomAgent(string $nom_agent) Return CommonTDocumentContat objects filtered by the nom_agent column
 * @method array findByPrenomAgent(string $prenom_agent) Return CommonTDocumentContat objects filtered by the prenom_agent column
 * @method array findByIdBlob(int $id_blob) Return CommonTDocumentContat objects filtered by the id_blob column
 * @method array findByTailleDocument(string $taille_document) Return CommonTDocumentContat objects filtered by the taille_document column
 * @method array findByExtensionDocument(string $extension_document) Return CommonTDocumentContat objects filtered by the extension_document column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTDocumentContatQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTDocumentContatQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTDocumentContat', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTDocumentContatQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTDocumentContatQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTDocumentContatQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTDocumentContatQuery) {
            return $criteria;
        }
        $query = new CommonTDocumentContatQuery();
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
     * @return   CommonTDocumentContat|CommonTDocumentContat[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTDocumentContatPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentContatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTDocumentContat A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdDocument($key, $con = null)
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
     * @return                 CommonTDocumentContat A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_document`, `id_contrat`, `type_document`, `nom_document`, `titre_document`, `date_creation`, `date_modification`, `id_agent`, `nom_agent`, `prenom_agent`, `id_blob`, `taille_document`, `extension_document` FROM `t_document_contat` WHERE `id_document` = :p0';
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
            $obj = new CommonTDocumentContat();
            $obj->hydrate($row);
            CommonTDocumentContatPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTDocumentContat|CommonTDocumentContat[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTDocumentContat[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTDocumentContatQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTDocumentContatPeer::ID_DOCUMENT, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTDocumentContatQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTDocumentContatPeer::ID_DOCUMENT, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_document column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDocument(1234); // WHERE id_document = 1234
     * $query->filterByIdDocument(array(12, 34)); // WHERE id_document IN (12, 34)
     * $query->filterByIdDocument(array('min' => 12)); // WHERE id_document >= 12
     * $query->filterByIdDocument(array('max' => 12)); // WHERE id_document <= 12
     * </code>
     *
     * @param     mixed $idDocument The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentContatQuery The current query, for fluid interface
     */
    public function filterByIdDocument($idDocument = null, $comparison = null)
    {
        if (is_array($idDocument)) {
            $useMinMax = false;
            if (isset($idDocument['min'])) {
                $this->addUsingAlias(CommonTDocumentContatPeer::ID_DOCUMENT, $idDocument['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDocument['max'])) {
                $this->addUsingAlias(CommonTDocumentContatPeer::ID_DOCUMENT, $idDocument['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDocumentContatPeer::ID_DOCUMENT, $idDocument, $comparison);
    }

    /**
     * Filter the query on the id_contrat column
     *
     * Example usage:
     * <code>
     * $query->filterByIdContrat(1234); // WHERE id_contrat = 1234
     * $query->filterByIdContrat(array(12, 34)); // WHERE id_contrat IN (12, 34)
     * $query->filterByIdContrat(array('min' => 12)); // WHERE id_contrat >= 12
     * $query->filterByIdContrat(array('max' => 12)); // WHERE id_contrat <= 12
     * </code>
     *
     * @param     mixed $idContrat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentContatQuery The current query, for fluid interface
     */
    public function filterByIdContrat($idContrat = null, $comparison = null)
    {
        if (is_array($idContrat)) {
            $useMinMax = false;
            if (isset($idContrat['min'])) {
                $this->addUsingAlias(CommonTDocumentContatPeer::ID_CONTRAT, $idContrat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idContrat['max'])) {
                $this->addUsingAlias(CommonTDocumentContatPeer::ID_CONTRAT, $idContrat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDocumentContatPeer::ID_CONTRAT, $idContrat, $comparison);
    }

    /**
     * Filter the query on the type_document column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeDocument(1234); // WHERE type_document = 1234
     * $query->filterByTypeDocument(array(12, 34)); // WHERE type_document IN (12, 34)
     * $query->filterByTypeDocument(array('min' => 12)); // WHERE type_document >= 12
     * $query->filterByTypeDocument(array('max' => 12)); // WHERE type_document <= 12
     * </code>
     *
     * @param     mixed $typeDocument The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentContatQuery The current query, for fluid interface
     */
    public function filterByTypeDocument($typeDocument = null, $comparison = null)
    {
        if (is_array($typeDocument)) {
            $useMinMax = false;
            if (isset($typeDocument['min'])) {
                $this->addUsingAlias(CommonTDocumentContatPeer::TYPE_DOCUMENT, $typeDocument['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeDocument['max'])) {
                $this->addUsingAlias(CommonTDocumentContatPeer::TYPE_DOCUMENT, $typeDocument['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDocumentContatPeer::TYPE_DOCUMENT, $typeDocument, $comparison);
    }

    /**
     * Filter the query on the nom_document column
     *
     * Example usage:
     * <code>
     * $query->filterByNomDocument('fooValue');   // WHERE nom_document = 'fooValue'
     * $query->filterByNomDocument('%fooValue%'); // WHERE nom_document LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomDocument The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentContatQuery The current query, for fluid interface
     */
    public function filterByNomDocument($nomDocument = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomDocument)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomDocument)) {
                $nomDocument = str_replace('*', '%', $nomDocument);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTDocumentContatPeer::NOM_DOCUMENT, $nomDocument, $comparison);
    }

    /**
     * Filter the query on the titre_document column
     *
     * Example usage:
     * <code>
     * $query->filterByTitreDocument('fooValue');   // WHERE titre_document = 'fooValue'
     * $query->filterByTitreDocument('%fooValue%'); // WHERE titre_document LIKE '%fooValue%'
     * </code>
     *
     * @param     string $titreDocument The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentContatQuery The current query, for fluid interface
     */
    public function filterByTitreDocument($titreDocument = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($titreDocument)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $titreDocument)) {
                $titreDocument = str_replace('*', '%', $titreDocument);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTDocumentContatPeer::TITRE_DOCUMENT, $titreDocument, $comparison);
    }

    /**
     * Filter the query on the date_creation column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCreation('2011-03-14'); // WHERE date_creation = '2011-03-14'
     * $query->filterByDateCreation('now'); // WHERE date_creation = '2011-03-14'
     * $query->filterByDateCreation(array('max' => 'yesterday')); // WHERE date_creation > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateCreation The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentContatQuery The current query, for fluid interface
     */
    public function filterByDateCreation($dateCreation = null, $comparison = null)
    {
        if (is_array($dateCreation)) {
            $useMinMax = false;
            if (isset($dateCreation['min'])) {
                $this->addUsingAlias(CommonTDocumentContatPeer::DATE_CREATION, $dateCreation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreation['max'])) {
                $this->addUsingAlias(CommonTDocumentContatPeer::DATE_CREATION, $dateCreation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDocumentContatPeer::DATE_CREATION, $dateCreation, $comparison);
    }

    /**
     * Filter the query on the date_modification column
     *
     * Example usage:
     * <code>
     * $query->filterByDateModification('2011-03-14'); // WHERE date_modification = '2011-03-14'
     * $query->filterByDateModification('now'); // WHERE date_modification = '2011-03-14'
     * $query->filterByDateModification(array('max' => 'yesterday')); // WHERE date_modification > '2011-03-13'
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
     * @return CommonTDocumentContatQuery The current query, for fluid interface
     */
    public function filterByDateModification($dateModification = null, $comparison = null)
    {
        if (is_array($dateModification)) {
            $useMinMax = false;
            if (isset($dateModification['min'])) {
                $this->addUsingAlias(CommonTDocumentContatPeer::DATE_MODIFICATION, $dateModification['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModification['max'])) {
                $this->addUsingAlias(CommonTDocumentContatPeer::DATE_MODIFICATION, $dateModification['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDocumentContatPeer::DATE_MODIFICATION, $dateModification, $comparison);
    }

    /**
     * Filter the query on the id_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgent(1234); // WHERE id_agent = 1234
     * $query->filterByIdAgent(array(12, 34)); // WHERE id_agent IN (12, 34)
     * $query->filterByIdAgent(array('min' => 12)); // WHERE id_agent >= 12
     * $query->filterByIdAgent(array('max' => 12)); // WHERE id_agent <= 12
     * </code>
     *
     * @param     mixed $idAgent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentContatQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(CommonTDocumentContatPeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(CommonTDocumentContatPeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDocumentContatPeer::ID_AGENT, $idAgent, $comparison);
    }

    /**
     * Filter the query on the nom_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByNomAgent('fooValue');   // WHERE nom_agent = 'fooValue'
     * $query->filterByNomAgent('%fooValue%'); // WHERE nom_agent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentContatQuery The current query, for fluid interface
     */
    public function filterByNomAgent($nomAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomAgent)) {
                $nomAgent = str_replace('*', '%', $nomAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTDocumentContatPeer::NOM_AGENT, $nomAgent, $comparison);
    }

    /**
     * Filter the query on the prenom_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenomAgent('fooValue');   // WHERE prenom_agent = 'fooValue'
     * $query->filterByPrenomAgent('%fooValue%'); // WHERE prenom_agent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenomAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentContatQuery The current query, for fluid interface
     */
    public function filterByPrenomAgent($prenomAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenomAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenomAgent)) {
                $prenomAgent = str_replace('*', '%', $prenomAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTDocumentContatPeer::PRENOM_AGENT, $prenomAgent, $comparison);
    }

    /**
     * Filter the query on the id_blob column
     *
     * Example usage:
     * <code>
     * $query->filterByIdBlob(1234); // WHERE id_blob = 1234
     * $query->filterByIdBlob(array(12, 34)); // WHERE id_blob IN (12, 34)
     * $query->filterByIdBlob(array('min' => 12)); // WHERE id_blob >= 12
     * $query->filterByIdBlob(array('max' => 12)); // WHERE id_blob <= 12
     * </code>
     *
     * @param     mixed $idBlob The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentContatQuery The current query, for fluid interface
     */
    public function filterByIdBlob($idBlob = null, $comparison = null)
    {
        if (is_array($idBlob)) {
            $useMinMax = false;
            if (isset($idBlob['min'])) {
                $this->addUsingAlias(CommonTDocumentContatPeer::ID_BLOB, $idBlob['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlob['max'])) {
                $this->addUsingAlias(CommonTDocumentContatPeer::ID_BLOB, $idBlob['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDocumentContatPeer::ID_BLOB, $idBlob, $comparison);
    }

    /**
     * Filter the query on the taille_document column
     *
     * Example usage:
     * <code>
     * $query->filterByTailleDocument('fooValue');   // WHERE taille_document = 'fooValue'
     * $query->filterByTailleDocument('%fooValue%'); // WHERE taille_document LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tailleDocument The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentContatQuery The current query, for fluid interface
     */
    public function filterByTailleDocument($tailleDocument = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tailleDocument)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tailleDocument)) {
                $tailleDocument = str_replace('*', '%', $tailleDocument);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTDocumentContatPeer::TAILLE_DOCUMENT, $tailleDocument, $comparison);
    }

    /**
     * Filter the query on the extension_document column
     *
     * Example usage:
     * <code>
     * $query->filterByExtensionDocument('fooValue');   // WHERE extension_document = 'fooValue'
     * $query->filterByExtensionDocument('%fooValue%'); // WHERE extension_document LIKE '%fooValue%'
     * </code>
     *
     * @param     string $extensionDocument The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentContatQuery The current query, for fluid interface
     */
    public function filterByExtensionDocument($extensionDocument = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($extensionDocument)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $extensionDocument)) {
                $extensionDocument = str_replace('*', '%', $extensionDocument);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTDocumentContatPeer::EXTENSION_DOCUMENT, $extensionDocument, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTDocumentContat $commonTDocumentContat Object to remove from the list of results
     *
     * @return CommonTDocumentContatQuery The current query, for fluid interface
     */
    public function prune($commonTDocumentContat = null)
    {
        if ($commonTDocumentContat) {
            $this->addUsingAlias(CommonTDocumentContatPeer::ID_DOCUMENT, $commonTDocumentContat->getIdDocument(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
